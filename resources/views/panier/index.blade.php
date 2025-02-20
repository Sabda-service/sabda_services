@extends('layouts.app')

@section('contenu')
<div class="container">
    <h1 class="text-center my-4">Votre panier</h1>
    @if ($panier->isEmpty())
        <p>Votre panier est vide.</p>
    @else
        <div class="row">
            @foreach ($panier as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset($item->produit->image) }}" class="card-img-top" alt="{{ $item->produit->nom }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->produit->nom }}</h5>
                        <p class="card-text">{{ $item->produit->description }}</p>
                        <p class="card-text">Quantité : {{ $item->quantite }}</p>
                        <p class="card-text">Prix unitaire : {{ $item->produit->prix }} €</p>
                        <p class="card-text">Total : {{ $item->produit->prix * $item->quantite }} €</p>
                        <form action="{{ route('panier.supprimer', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <h4>Total du panier : {{ $total }} €</h4>
            <a href="{{ route('paiement') }}" class="btn btn-success">Payer avec PayPal</a>
        </div>
    @endif
</div>
@endsection