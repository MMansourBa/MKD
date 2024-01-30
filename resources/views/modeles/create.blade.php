{{-- @extends('layouts.app')
  
@section('title', 'Ajouter Modele')
  
@section('contents')
    <h1 class="mb-0">Ajouter Modele</h1>
    <hr />
    <form action="{{ route('modeles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nom Modele" required>
            </div>
            <div class="col">
                {{-- <label for="image" class="form-control-label">Image</label> --}}
                {{-- <input type="file" name="image" class="form-control" placeholder="Image" accept=".jpg, .png, .svg" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </form>
@endsection --}} 

@extends('layouts.app')
  
@section('title', 'Ajouter Modele')
  
@section('contents')
    <h1 class="mb-0">Ajouter Modele</h1>
    <hr />
    <form action="{{ route('modeles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="">Nom modele:</label>
                <input type="text" name="name" class="form-control" placeholder="Nom Modele" required>
            </div>
        </div> 
        <div class="row mb-3">
            <div class="col">
                <label for="">Image:</label>
                <input type="file" name="image" class="form-control" placeholder="Image" accept=".jpg, .jpeg, .png, .svg" required onchange="previewImage(event)">
                <img id="preview" src="#" alt="Prévisualisation de l'image" style="max-width: 50%; height: auto; max-height: 500px; display: none;">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Description:</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </form>
    
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
