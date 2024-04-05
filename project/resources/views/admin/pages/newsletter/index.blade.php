@extends('admin.layouts.mainlayout')

@section('maincontent')

    @if (session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Succès !</strong> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table id="example1" class="table table-bordered table-striped">
        <h3 class="text-center text-danger">Liste des Newsletters</h3>
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item" href="{{ url ('supprimer_newsletter/' .$item->id) }}" onClick="return confirm('You sure??');">Supprimer</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
