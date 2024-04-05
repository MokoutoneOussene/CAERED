@extends('admin.layouts.mainlayout')

@section('maincontent')
    @if (session()->has('message'))
        <div class="alert alert-warning alert-dismissible show" role="alert">
            <span class="small">{{ session()->get('message') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="mb-3">
        <button class="btn btn-dark" type="button">
            <a class="text-light" href="{{ route('gestion_users.create') }}">Nouveau utilisateur</a>
        </button>
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <h3 class="text-center text-danger">Liste des utilisateurs</h3>
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nom Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">Institution</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $use)
                <tr>
                    <td>{{ $use->id }}</td>
                    <td>{{ $use->nom }} {{ $use->prenom }}</td>
                    <td>{{ $use->email }}</td>
                    <td>{{ $use->institution }}</td>
                    <td>{{ $use->Role->label }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <form method="POST" action="{{ url('activation_user/' . $use->id) }}">
                                            @csrf
                                            <input type="text" name="active" value="actif" hidden>
                                            <button type="submit" class="btn">Activer</button>
                                        </form>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('gestion_users.show', [$use->id]) }}">Detail</a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('gestion_users.edit', [$use->id]) }}">Editer</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url('supprimer_user/' . $use->id) }}"
                                        onClick="return confirm('You sure??');">Supprimer</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
