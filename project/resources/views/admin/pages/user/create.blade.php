@extends('admin.layouts.mainlayout')

@section('maincontent')
    <div class="mb-3">
        <button class="btn btn-dark" type="button">
            <a class="text-light" href="{{ route('gestion_users.index') }}">Liste des utilisateurs</a>
        </button>
    </div>

    <form action="{{ route('add_member') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow">
            <h3 class="text-center text-danger">Ajout de nouveau utilisateur</h3>
            <div class="card-body">
                <div class="row mb-3">
                    <input type="text" name="active" value="nom actif" placeholder="Active user" hidden />
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" placeholder="Nom" />
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Prénom</label>
                        <input type="text" name="prenom" class="form-control" placeholder="Prénom" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-4 col-md-12">
                        <label for="inputEmail5" class="form-label">Prénom</label>
                        <select name="roles_id" class="form-control">
                            @foreach (App\Models\Role::all() as $item)
                                <option value="{{$item->id}}">{{$item->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <label for="inputEmail5" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" />
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <label for="inputEmail5" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Institution</label>
                        <input type="text" name="institution" class="form-control" placeholder="Institution" />
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Profession</label>
                        <input type="text" name="profession" class="form-control" placeholder="Profession" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Dernier diplome</label>
                        <input type="text" name="diplome" class="form-control" placeholder="Dernier diplome" />
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <label for="inputEmail5" class="form-label">Lien linkedin</label>
                        <input type="text" name="linkedin" class="form-control" placeholder="Lien linkedin" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12 col-md-12">
                        <label for="inputEmail5" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" />
                    </div>
                </div>

            </div>

            <div class="m-3">
                <button onClick="return confirm('You sure??');" class="btn btn-dark" type="submit">Enregistrer</button>
                <button class="btn btn-danger" type="reset">Annuler</button>
            </div>
        </div>
    </form>
@endsection
