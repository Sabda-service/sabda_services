@extends('layouts.app')

@section('contenu')
<div class="container">
    <h1 class="text-center my-4">Nos produits</h1>
    <div class="row">
        @foreach ($produits as $produit)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset($produit->image) }}" class="card-img-top" alt="{{ $produit->nom }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $produit->nom }}</h5>
                    <p class="card-text">{{ $produit->description }}</p>
                    <p class="card-text">{{ $produit->prix }} €</p>
                    <form action="{{ route('panier.ajouter', $produit->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('home') }}" class="btn btn-secondary">Retour à l'accueil</a>
    </div>
</div>
@endsection