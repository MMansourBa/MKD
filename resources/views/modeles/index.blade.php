@extends('layouts.app')
  
@section('title', 'Accueil')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste des modeles</h1>
        <a href="{{ route('modeles.create') }}" class="btn btn-primary">Ajouter Produit</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    {{-- @if ($message = Session::get('success'))
            <script type="text/javascript">
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                    });

                        Toast.fire({
                        icon: "success",
                        title: '{{ "$message" }}'
                    });
            </script>
        @endif --}}
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nom Modele</th>
                <th>Image</th>
                <th>Description</th>
                <th>ID Admin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($modele->count() > 0)
                @foreach($modele as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->image }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">{{ $rs->user_id }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('modeles.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('modeles.edit', $rs->id)}}" type="button" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('modeles.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Modele introuvable</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection