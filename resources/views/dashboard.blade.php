{{-- @extends('layouts.app')
  
@section('title', 'Tableau de bord - Panneau d''administration Laravel avec connexion et inscription')
  
@section('contents')
  <div class="row">
    Tableau de bord
  </div>
@endsection --}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFROCOUTURE-DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('dashboard')}}">Vos Articles</a>



            <div class="d-flex left">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="#">Bonjour {{Auth::user()->nom}} {{Auth::user()->prenom}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route ('logout')}}">Déconnexion</a>
                  </li>


            </div>
          </div>
        </div>
      </nav>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
