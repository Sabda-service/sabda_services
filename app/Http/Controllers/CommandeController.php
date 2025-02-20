<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Commande;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::where('user_id', Auth::id())->get();
        return view('commandes.index', compact('commandes'));
    }
}
