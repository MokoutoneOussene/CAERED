@extends('admin.layouts.mainlayout')

@section('maincontent')
    <div class="mb-3">
        <button class="btn btn-dark" type="button">
            <a class="text-light" href="{{ route('gestion_users.index') }}">Liste des utilisateurs</a>
        </button>
    </div>

    <form action="{{ route('gestion_users.update', [$find->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card shadow">
            <h3 class="text-center text-danger">Modification de l'utilisateur N° {{$find->id}}</h3>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Nom</label>
                        <input type="text" name="nom" value="{{$find->nom}}" class="form-control"/>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Prénom</label>
                        <input type="text" name="prenom" value="{{$find->prenom}}" class="form-control"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Prénom</label>
                        <select name="roles_id" class="form-control">
                            @foreach (App\Models\Role::all() as $item)
                                <option value="{{$item->id}}">{{$item->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Email</label>
                        <input type="email" name="email" value="{{$find->email}}" class="form-control"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Institution</label>
                        <input type="text" name="institution" value="{{$find->institution}}" class="form-control"/>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Profession</label>
                        <input type="text" name="profession" value="{{$find->profession}}" class="form-control"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Dernier diplome</label>
                        <input type="text" name="diplome" value="{{$find->diplome}}" class="form-control"/>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Lien linkedin</label>
                        <input type="text" name="linkedin" value="{{$find->linkedin}}" class="form-control"/>
                    </div>
                </div>

            </div>

            <div class="m-3">
                <button onClick="return confirm('You sure??');" class="btn btn-dark" type="submit">Modifier</button>
                <button class="btn btn-danger" type="reset">Annuler</button>
            </div>
        </div>
    </form>
@endsection
