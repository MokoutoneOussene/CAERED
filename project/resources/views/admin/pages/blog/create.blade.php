@extends('admin.layouts.mainlayout')

@section('maincontent')
    <div class="mb-3">
        <button class="btn btn-dark" type="button">
            <a class="text-light" href="{{ route('gestion_blog.index') }}">Liste des posts</a>
        </button>
    </div>

    <form action="{{ route('gestion_blog.store') }}" method="POST">
        @csrf
        <div class="card shadow">
            <h3 class="text-center text-danger">Ajout de nouveau post</h3>
            <div class="card-body">
                <div class="row">
                    <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                    <div class="col-lg-12 col-md-12 mb-3">
                        <label for="inputEmail5" class="form-label">Titre post</label>
                        <input type="text" name="titre" class="form-control" placeholder="titre" />
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <label for="inputEmail5" class="form-label">Contenu</label>
                        <textarea name="contenu" class="form-control" cols="30" rows="5"></textarea>
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
