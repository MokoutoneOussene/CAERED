@extends('layouts.main')

@section('contant')
    <!----page header----->

    <div class="page_header_default style_one ">
        <div class="parallax_cover">
            <img src="{{ asset('assets/img/about-us.jpeg') }}" alt="bg_image" class="cover-parallax">
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                Contactez nous
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Accueil</a> </li>
                                <li class="active">Contactez nous</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----page header----->

    <!--===============spacing==============-->
    <div class="pd_bottom_60"></div>
    <!--===============spacing==============-->

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 shadow">
                <div class="contntent address">
                    <div class="text-center m-3">
                        <i class="icon-placeholder" style="font-size: 50px;"></i>
                    </div>
                    <div class="text-center p-3">
                        <h5>Localisation</h5>
                        <p>Ouagadougou secteur 30 04 BP 8938 Ouagadougou 04</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 shadow">
                <div class="contntent address">
                    <div class="text-center m-3">
                        <i class="icon-email" style="font-size: 50px;"></i>
                    </div>
                    <div class="text-center p-3">
                        <h5>Adresse</h5>
                        <p>caeredbf@gmail.com</p>
                        <p>info@caered.org</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 shadow">
                <div class="contntent address">
                    <div class="text-center m-3">
                        <i class="icon-phone-call" style="font-size: 50px;"></i>
                    </div>
                    <div class="text-center p-3">
                        <h5>Contact</h5>
                        <p>(+226) 25 39 55 26 - 67 77 26 96 - 79 07 33 60 - 73 41 52 59</p>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_60"></div>
        <!--===============spacing==============-->
        <div class="row">
            <div class="col-lg-5 col-md-12 form_inner">
                <div class="form_content">
                    <form class="contact-form" method="post" action="">
                        <p>
                            <label> Votre nom<br />
                                <input type="text" name="name" value="" size="60" placeholder="Entrer votre nom" />
                                <br />
                            </label>
                        </p>
                        <p><label> Votre email<br />
                                <input type="email" name="email" value="" size="60" placeholder="Entrer votre Email" />
                                <br />
                            </label>
                        </p>
                        <p>
                            <label> Objet <br />
                                <input type="text" name="subject" value="" size="60" placeholder="Entrer l'objet" />
                                <br />
                            </label>
                        </p>
                        <p>
                            <label> Votre message<br />
                                <textarea name="message" cols="60" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                    placeholder="Entrer votre Message"></textarea>
                                <br />
                            </label>
                        </p>
                        <p><input type="submit" value="Envoyer" /></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 about_company_inner">
                <div class="abt_content">
                    <div class="logo text-center mb-4">
                        <img src="{{ asset('assets/img/logo_caered.png') }}" alt="img" class="company_logo_modal w-25">
                    </div>
                    <div class="text">
                        <h2>Le Centre Africain d’Etudes et de Recherche en Economie du Développement</h2>
                        <p>
                            est une association à but non lucratif, non confessionnel, apolitique,
                            non syndical et sans discrimination aucune.
                        </p>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---newsteller--->
    @include('require.newsletter')
    <!---newsteller end--->
@endsection
