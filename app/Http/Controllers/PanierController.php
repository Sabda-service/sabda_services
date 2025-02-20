<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanierController extends Controller
{
    // Ajouter un produit au panier
    public function ajouter(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);

        // Vérifier si le produit est déjà dans le panier
        $panier = Panier::where('user_id', Auth::id())
                        ->where('produit_id', $id)
                        ->first();

        if ($panier) {
            // Si le produit est déjà dans le panier, augmenter la quantité
            $panier->quantite += $request->quantite ?? 1;
            $panier->save();
        } else {
            // Sinon, ajouter le produit au panier
            Panier::create([
                'user_id' => Auth::id(),
                'produit_id' => $id,
                'quantite' => $request->quantite ?? 1,
            ]);
        }

        return redirect()->back()->with('success', 'Produit ajouté au panier !');
    }

    // Afficher le panier
    public function index()
    {
        $panier = Panier::where('user_id', Auth::id())->with('produit')->get();
        $total = $panier->sum(function ($item) {
            return $item->produit->prix * $item->quantite;
        });

        return view('panier.index', compact('panier', 'total'));
    }

    // Supprimer un produit du panier
    public function supprimer($id)
    {
        $panier = Panier::findOrFail($id);
        $panier->delete();

        return redirect()->back()->with('success', 'Produit supprimé du panier !');
    }

    // Gérer le paiement via PayPal
    public function paiement()
    {
        $panier = Panier::where('user_id', Auth::id())->with('produit')->get();
        $total = $panier->sum(function ($item) {
            return $item->produit->prix * $item->quantite;
        });

        $provider = new \Srmklive\PayPal\Services\PayPal(config('paypal'));
        $data = [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'EUR',
                        'value' => $total,
                    ],
                ],
            ],
        ];

        $response = $provider->createOrder($data);
        return redirect($response['links'][1]['href']);
    }

    // Gérer le succès du paiement via PayPal
    public function succes(Request $request)
    {
        $provider = new \Srmklive\PayPal\Services\PayPal(config('paypal'));
        $response = $provider->capturePaymentOrder($request->token);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Enregistrer la commande
            $commande = Commande::create([
                'user_id' => Auth::id(),
                'total' => $response['purchase_units'][0]['amount']['value'],
                'statut' => 'payé',
            ]);

            // Vider le panier
            Panier::where('user_id', Auth::id())->delete();

            return redirect()->route('/')->with('success', 'Paiement réussi ! Merci pour votre achat.');
        }

        return redirect()->route('panier.index')->with('error', 'Paiement échoué.');
    }
}
