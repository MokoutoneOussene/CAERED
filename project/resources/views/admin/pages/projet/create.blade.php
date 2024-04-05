@extends('admin.layouts.mainlayout')

@section('maincontent')
    <form action="{{ route('gestion_projets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow">
        <h3 class="text-center text-danger">Ajout de nouveau projet</h3>
            <div class="card-body">
                <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Titre projet</label>
                        <input type="text" name="titre" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail5" class="form-label">Institution de financement</label>
                        <input type="text" name="inst_finance" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Date debut</label>
                        <input type="date" name="date_debut" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Date fin</label>
                        <input type="date" name="date_fin" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputEmail5" class="form-label">Lieu</label>
                        <input type="text" name="lieu" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Résultats et / ou publications</label>
                        <input type="text" name="resultat" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="inputEmail5" class="form-label">Atelier de vulgarisation</label>
                        <input type="text" name="atelier_vulgarisation" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Image avant (chargez)</label>
                        <input type="file" name="img_avant" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Image après (chargez)</label>
                        <input type="file" name="img_apres" class="form-control" id="inputEmail5">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="inputState" class="form-label">Observation</label>
                        <textarea class="form-control" name="observation" id="" cols="30" rows="5"></textarea>
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
