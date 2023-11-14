@extends('layouts.app')
@section('title', 'Générer le document (PDF)')
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h3>Générer le document (PDF)</h3>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#generationAlert"><ti class="ti ti-cloud-download"></ti> Générer le document PDF</button>
</div>
<div class="card mt-4" id="print">
    <div class="card-body p-5">
        <div class="bg-dark text-center p-2 rounded">
            <h1 class="text-white fw-bold">{{ $document->documenttype ? $document->documenttype->name : 'Autre' }}</h1>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="d-flex flex-column">
                <span class="fw-bold">{{ $document->customer->name }}</span>
                <span>{{ $document->customer->email }}</span>
                <span>{{ $document->customer->phone }}</span>
                <span>{{ $document->customer->website }}</span>
                <span>{{ $document->customer->vat_number }}</span>
            </div>
            <div class="d-flex flex-column text-end">
                <span class="fw-bold">INOVANCY SPRL</span>
                <span>Rue de Fleurus 140, 5060 Sambreville</span>
                <span>BE 0891.995.174</span>
                <span>inovancy.dev</span>
            </div>
        </div>
        <hr class="my-4">
        <div class="d-flex flex-column">
            <span>Date: {{ $document->created_at }}</span>
            <span>Echeance du paiement: {{ $document->created_at->addDays(30) }}</span>
        </div>
        <hr class="my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Marque</th>
                    <th>Nom</th>
                    <th>P. de vente</th>
                    <th>Prix HTVA</th>
                    <th>Prix TVAC</th>
                    <th>Qté</th>
                    <th>Remise</th>
                    <th>Total HTVA</th>
                    <th>Total TVAC</th>
                </tr>
            </thead>
            <tbody>
                @foreach($document->products as $product)
                <tr>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->selling_price }}€</td>
                    <td>{{ $product->pivot->price_hvat }}€</td>
                    <td>{{ $product->pivot->price_vvat }}€</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>{{ $product->pivot->discount }}%</td>
                    <td>{{ $product->pivot->total_hvat }}€</td>
                    <td>{{ $product->pivot->total }}€</td>
                </tr>
                @endforeach
        </table>
        <div class="text-end">
            <div class="d-flex flex-column">
                <span>Total HTVA: {{ $document->totalhvat }}€</span>
                <span>TVA: {{ $document->vat }}%</span>
                <span>Total TVAC: {{ $document->totalttc }}€</span>
            </div>
        </div>
        <hr class="my-4">
        <div class="w-50">
            <img src="/img/payments_methods.png" class="img-fluid">
            <p class="text-secondary mt-4">En cas de retard, une pénalité au taux annuel de 5 % sera appliquée, à laquelle s’ajoutera une indemnité forfaitaire pour frais de recouvrement de 40 €</p>
        </div>
    </div>
</div>
<div class="modal fade" id="generationAlert" tabindex="-1" aria-labelledby="generationAlert" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="generationAlertLabel"><i class="ti ti-alert-triangle-filled"></i> Attention: calculs automatiques</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    Contrairement à la page où vous situez qui se base exclusivement sur les données enregistrées, la génération du PDF calcule automatiquement les sous totaux (en fonction des taxes et réductions) ainsi que les totaux finaux.
                    Si vous souhaitez garder les données enregistrées sur le PDF, cliquez sur "Garder les valeurs enregistrées" (BETA). Si vous souhaitez que le PDF calcule automatiquement les sous totaux et totaux finaux, cliquez sur "Calculer automatiquement".
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <a href="{{ route('documents.download', [$document->id, 0]) }}" class="btn btn-primary">Garder les valeurs enregistrées</a>
                <a href="{{ route('documents.download', [$document->id, 1]) }}" class="btn btn-primary">Calculer automatiquement</a>
            </div>
        </div>
    </div>
</div>
@endsection