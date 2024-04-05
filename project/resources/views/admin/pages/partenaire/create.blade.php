@extends('admin.layouts.mainlayout')

@section('maincontent')

    <div class="m-3">
        <a href="{{ route('gestion_partenaires.index') }}" class="btn btn-dark">Liste des partenaires</a>
    </div>

    <form action="{{ route('gestion_partenaires.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow">
            <h3 class="text-danger m-3">Ajout de partenaire</h3>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-lg-12 col-md-12">
                        <label for="inputState" class="form-label">Nom partenaire</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12 col-md-12">
                        <label for="inputState" class="form-label">Logo</label>
                        <input type="file" name="logo" class="form-control">
                    </div>
                </div>
            </div>
            <div class="m-3">
                <button onClick="return confirm('You sure??');" class="btn btn-dark" type="submit">Ajouter</button>
                <button class="btn btn-danger" type="reset">Annuler</button>
            </div>
        </div>
    </form>
@endsection
