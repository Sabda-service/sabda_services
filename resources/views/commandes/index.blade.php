@extends('layouts.app')

@section('contenu')
<div class="container">
    <h1 class="text-center my-4">Vos commandes</h1>
    @if ($commandes->isEmpty())
        <p>Vous n'avez aucune commande.</p>
    @else
        <div class="row">
            @foreach ($commandes as $commande)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Commande #{{ $commande->id }}</h5>
                        <p class="card-text">Total : {{ $commande->total }} €</p>
                        <p class="card-text">Statut : {{ $commande->statut }}</p>
                        <p class="card-text">Date : {{ $commande->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection