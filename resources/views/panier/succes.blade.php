@extends('layouts.app')

@section('contenu')
<div class="container">
    <h1 class="text-center my-4">Paiement réussi</h1>
    <p>Merci pour votre achat ! Votre commande a été enregistrée.</p>
    <a href="{{ route('produits.index') }}" class="btn btn-primary">Retour aux produits</a>
</div>
@endsection