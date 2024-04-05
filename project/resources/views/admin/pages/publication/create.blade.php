@extends('admin.layouts.mainlayout')

@section('maincontent')
    <form action="{{ route('gestion_publication.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow">
            <h3 class="text-center text-danger">Ajout de nouveau publication</h3>
            <div class="card-body">

                <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                <input type="text" name="statut" value="a venir" hidden>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Nom publication</label>
                        <input type="text" name="nom_pub" class="form-control" id="inputEmail5">
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail5" class="form-label">Lieu</label>
                        <input type="text" name="lieu" class="form-control" id="inputEmail5">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="inputEmail5" class="form-label">Categorie</label>
                        <select id="inputState" name="categories_id" class="form-control">
                            @foreach ($category as $cate)
                                <option value="{{ $cate->id }}">{{ $cate->nom_cat }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="inputEmail5" class="form-label">Service</label>
                        <select id="inputState" name="services_id" class="form-control">
                            @foreach ($services as $serv)
                                <option value="{{ $serv->id }}">{{ $serv->nom_service }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputEmail5" class="form-label">Voir par autres services</label>
                        <select id="inputState" name="voir_plus" class="form-control">
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="inputEmail5">
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Heure</label>
                        <input type="time" name="heure" class="form-control" id="inputEmail5">
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Image</label>
                        <input type="file" name="img" class="form-control" id="inputEmail5">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="inputState" class="form-label">Description</label>
                        <textarea class="form-control" name="descript" id="" cols="30" rows="5"></textarea>
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
