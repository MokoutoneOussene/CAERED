@extends('layouts.main')

@section('contant')
    @include('require.caroussel')

    <section class="client-brand" style="background: rgb(232, 237, 237)">
        <!--===============spacing==============-->
        <div class="pd_top_80"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-3 mb-lg-0 mb-xl-0">
                    <div class="title_all_box style_one  dark_color">
                        <div class="title_sections left">
                            <h2>Mot du président</h2>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/team/team-2.jpg') }}" class="w-100" alt="image president">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="description_box">
                        <p class="mb-2">
                            Le Centre Africain d’Etudes et de Recherche en Economie du Développement
                            (CAERED) est une association à but non lucratif, non confessionnel, apolitique,
                            non syndical et sans discri-mination aucune.
                        </p>
                        <p class="mb-2">
                            Il s’agit d’un organisme indépendant de re-cherche, d’études, d’analyses et de réflexion
                            et un laboratoire d’idées.
                        </p>
                        <p>
                            A cet effet, il réunit autour d’une personnalité morale, des personnes physiques et
                            morales de bonne volonté qui parta-gent sa vision et désirent contribuer, proposer ou
                            apporter des réponses précises et/ou effectives aux sujets relatifs aux politiques
                            économiques en Afrique en général et au Burkina Faso en particulier.
                        </p>
                    </div>
                    <div class="description_box">
                        <p class="mb-2">
                            Le Centre Africain d’Etudes et de Recherche en Economie du Développement
                            (CAERED) est une association à but non lucratif, non confessionnel, apolitique,
                            non syndical et sans discri-mination aucune.
                        </p>
                        <p class="mb-2">
                            Il s’agit d’un organisme indépendant de re-cherche, d’études, d’analyses et de réflexion
                            et un laboratoire d’idées.
                        </p>
                        <p>
                            A cet effet, il réunit autour d’une personnalité morale, des personnes physiques et
                            morales de bonne volonté qui parta-gent sa vision et désirent contribuer, proposer ou
                            apporter des réponses précises et/ou effectives aux sujets relatifs aux politiques
                            économiques en Afrique en général et au Burkina Faso en particulier.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_20"></div>
        <!--===============spacing==============-->
    </section>

    <!---expertise--->
    <section class="expertise mt-3 container">
        <div class="area_of_expertise">
            <div class="simpleParallax">
                <img src="{{ asset('assets/img/logo_caered.png') }}" class="cover-parallax" alt="image">
            </div>
            <div class="title_and_video">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="video_box text-center">
                                <a href="https://www.youtube.com/watch?v=U0VsCQEAAMM" class="lightbox-image"><i
                                        class="icon-play"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-6">
                            <div class="title_all_box style_one text-end">
                                <div class="title_sections">
                                    <h2>Le Centre Africain d’Etudes et de Recherche en Economie du Développement</h2>
                                    <p>
                                        est une association à but non lucratif, non confessionnel, apolitique,
                                        non syndical et sans discrimination aucune.
                                    </p>
                                </div>
                                <div class="theme_btn">
                                    <a href="#" class="theme-btn one">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="expertise">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                            <div class="step_number">
                                <h1>01.</h1>
                            </div>
                            <h2 class="title"><a href="#">Bureau exécutif</a>
                            </h2>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                            <div class="step_number">
                                <h1>02.</h1>
                            </div>
                            <h2 class="title">
                                <a href="#">Conseil scientifique</a>
                            </h2>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                            <div class="step_number">
                                <h1>03.</h1>
                            </div>
                            <h2 class="title">
                                <a href="#">Commissaires aux comptes</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---expertise-end--->

    <!--===============spacing==============-->
    <div class="pd_bottom_20"></div>
    <!--===============spacing==============-->

    <!---partners--->
    @include('require.partenair')
    <!---partners-end--->

    <!---team--->
    @include('require.membre')
    <!---team-end--->

    <!---partners--->
    @include('require.contact')
    <!---partners-end--->

    <!---newsteller--->
    @include('require.newsletter')
    <!---newsteller end--->
@endsection
