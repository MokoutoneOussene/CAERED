@extends('admin.layouts.mainlayout')

@section('maincontent')

    <div>
        <a href="{{ route('gestion_projets.create') }}" class="btn btn-dark">+ Nouveau</a>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-warning alert-dismissible show" role="alert">
            <span class="small">{{ session()->get('message') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <table id="example1" class="table table-bordered table-striped">
        <h3 class="text-center text-danger">Liste des projets</h3>
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Titre du projet</th>
                <th scope="col">Date debut</th>
                <th scope="col">Date fin</th>
                <th scope="col">Lieu</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $prog)
                <tr>
                    <td>{{ $prog->id }}</td>
                    <td>{{ $prog->titre }}</td>
                    <td>{{ $prog->date_debut }}</td>
                    <td>{{ $prog->date_fin }}</td>
                    <td>{{ $prog->lieu }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item" href="">Detail</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">Editer</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">Supprimer</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
