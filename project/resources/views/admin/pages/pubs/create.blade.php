@extends('admin.layouts.mainlayout')

@section('maincontent')

    <div class="m-3">
        <a href="{{ route('gestion_publication.index') }}" class="btn btn-dark">Liste des publication</a>
    </div>

    <form action="{{ route('gestion_publication.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow">
            <h3 class="text-danger m-3">Création d'une publication</h3>
            <div class="card-body">
                <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputEmail5" class="form-label">Type de publication</label>
                        <select name="type_publications_id" class="form-control">
                            @foreach ($collection as $item)
                                <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Titre publication</label>
                        <input type="text" name="titre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputEmail5" class="form-label">Date de publication</label>
                        <input type="date" name="date_publication" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Année de publication</label>
                        <?php $years = range(1900, strftime('%Y', time())); ?>
                        <select class="form-control" name="annee">
                            <?php foreach($years as $year) : ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                            <?php endforeach; ?>
                        </select>
                        {{-- <input type="number" min="1900" max="2023" step="1" value="2016" name="annee" class="form-control"> --}}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Pays</label>
                        <input type="text" name="pays" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Ville</label>
                        <input type="text" name="Ville" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Mois</label>
                        <input type="text" name="mois" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Maison d'edition</label>
                        <input type="text" name="maison_edition" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Auteur du livre</label>
                        <input type="text" name="auteur_livre" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Page</label>
                        <input type="text" name="page" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Nom du journal</label>
                        <input type="text" name="nom_journal" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Nom pub de la conference</label>
                        <input type="text" name="nom_pub_conf" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Jour</label>
                        <input type="text" name="jour" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Pays</label>
                        <input type="text" name="pays" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Ville</label>
                        <input type="text" name="Ville" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">URL (lien de l'ouvrage)</label>
                        <input type="text" name="url" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="inputState" class="form-label">Contenu du publication</label>
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
