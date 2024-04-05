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
                                {{ $find->titre }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Accueil</a> </li>
                                <li class="active">Nos projets</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----page header----->

    <!--===============default spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============default spacing==============-->

    <section class="default_single_product">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset('storage') . '/' . $find->img_avant }}">
                                <img src="{{ asset('storage') . '/' . $find->img_avant }}" class="img-fluid" alt="img" />
                            </li>
                            <li data-thumb="{{ asset('storage') . '/' . $find->img_apres }}">
                                <img src="{{ asset('storage') . '/' . $find->img_apres }}" class="img-fluid" alt="img" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title">{{$find->titre}}</h1>
                        <p class="price"><span class="woocommerce-Price-amount amount"><bdi>Lieu : {{$find->lieu}}</bdi></span></p>
                        <div class="woocommerce-product-details__short-description">
                            <p>{{$find->observation}}</p>
                        </div>
                        <p class="stock in-stock">200 in stock (can be backordered)</p>
                        <div class="product_meta">
                            <span class="posted_in">Categories: <a href="shop-details.html" rel="tag">Coaching</a>,
                                <a href="#" rel="tag">Employee Relation</a>, <a href="shop-details.html"
                                    rel="tag">HR Consulting</a>, <a href="#" rel="tag">Recruiting</a>,
                                <a href="#" rel="tag">Small Business HR</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---newsteller--->
    @include('require.newsletter')
    <!---newsteller end--->
@endsection
