@extends('layouts.app')
  
@section('title', 'Modifier Modele')
  
@section('contents')
    <h1 class="mb-0">Modifier Modele</h1>
    <hr />
    <form action="{{ route('modeles.update', $modele->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nom modele</label>
                <input type="text" name="name" class="form-control" placeholder="Nom" value="{{ $modele->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control" placeholder="Image" value="{{ $modele->image }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $modele->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Mettre à jour</button>
            </div>
        </div>
    </form>
@endsection