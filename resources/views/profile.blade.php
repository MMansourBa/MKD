@extends('layouts.app')
  
@section('title', 'Profil')
  
@section('contents')
    <h1 class="mb-0">Profil</h1>
    <hr />
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="">
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Paramètres du profil</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">
  
                    <div class="col-md-6">
                        <label class="labels">Nom</label>
                        <input type="text" name="name" class="form-control" placeholder="Prenom(s) & Nom" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Téléphone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Numéro de téléphone" value="{{ auth()->user()->phone }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Addresse</label>
                        <input type="text" name="address" class="form-control" value="{{ auth()->user()->address }}" placeholder="Addresse">
                    </div>
                </div>
                 
                <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Enregistrer</button></div>
            </div>
        </div>
         
    </div>   
            
        </form>
@endsection