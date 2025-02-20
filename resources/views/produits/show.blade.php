@extends('layouts.app')

@section('contenu')
<div class="container">
    <h1>{{ $produit->nom }}</h1>
    <img src="{{ asset($produit->image) }}" alt="{{ $produit->nom }}" class="img-fluid">
    <p>{{ $produit->description }}</p>
    <p>{{ $produit->prix }} €</p>
    <a href="{{ route('produits.index') }}" class="btn btn-secondary">Retour à la liste</a>
</div>
@endsection