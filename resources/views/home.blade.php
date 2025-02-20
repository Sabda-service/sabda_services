@extends('layouts.app')

@section('contenu')
<div class="container">
    <h1>Bienvenue sur notre site !</h1>
    <p>Ceci est la page d'accueil.</p>

    @auth
        <p>Vous êtes connecté en tant que {{ Auth::user()->name }}.</p>
        <form method="POST" action="{{ route('produits.index') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Se déconnecter</button>
        </form>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
        <a href="{{ route('register') }}" class="btn btn-success">S'inscrire</a>
        <a href ="{{ route('produits.index') }}" class="btn btn-secondary">Voir les produits</a>
    @endauth
</div>
@endsection