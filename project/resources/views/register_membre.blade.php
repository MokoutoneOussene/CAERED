@extends('layouts.main')

@section('contant')

    @if (session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Succès !</strong> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mt-5">
        <div class="col-lg-8 col-md-12 form_inner">
            <h3 class="text-dark m-3">Création de compte CAERED</h3>
            <div class="form_content">
                <form class="contact-form" method="post" action="{{ route('add_member') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="roles_id" value="2" placeholder="Role user" hidden />
                    <input type="text" name="active" value="nom actif" placeholder="Active user" hidden />
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <input type="text" name="nom" placeholder="Nom" />
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <input type="text" name="prenom" placeholder="Prénom" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <input type="email" name="email" placeholder="Email" />
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <input type="password" name="password" placeholder="Mot de passe" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <input type="text" name="institution" placeholder="Institution" />
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <input type="text" name="profession" placeholder="Profession" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <input type="text" name="diplome" placeholder="Dernier diplome" />
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <input type="text" name="linkedin" placeholder="Lien linkedin" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <input type="file" name="photo" />
                        </div>
                    </div>
                    <div class="col-3">
                        <input type="submit" value="Envoyer" />
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 about_company_inner">
            <div class="abt_content">
                <div class="logo text-center mb-4">
                    <img src="{{ asset('assets/img/logo_caered.png') }}" alt="img" class="company_logo_modal w-25">
                </div>
                <div class="text">
                    <h4>Le Centre Africain d’Etudes et de Recherche en Economie du Développement</h4>
                    <p class="mt-5">
                        est une association à but non lucratif, non confessionnel, apolitique,
                        non syndical et sans discrimination aucune.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
