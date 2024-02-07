@extends('layouts.app')
  
@section('title', 'Voir le modele')
  
@section('contents')
    <h1 class="mb-0">Détail modele</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nom Modele</label>
            <input type="text" name="name" class="form-control" placeholder="Nom" value="{{ $modele->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            {{-- <label class="form-label">Image</label> --}}
            @if($modele->image)
                <img src="{{ asset('admin_assets/img/' . $modele->image) }}" alt="Image du modèle">
                <div>
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="modele_id" value="{{ $modele->id }}">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            @else
                <p>Aucune image disponible</p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $modele->description }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">ID Admin</label>
            <input type="text" name="user_id" class="form-control" placeholder="Product Code" value="{{ $modele->user_id}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Créé à</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $modele->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Mis à jour à</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $modele->updated_at }}" readonly>
        </div>
    </div>
@endsection