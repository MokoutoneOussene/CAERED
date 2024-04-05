@extends('layouts.main')

@section('contant')
    <!----page header----->

    <div class="page_header_default style_one ">
        <div class="parallax_cover">
            <img src="{{ asset('assets/images/publikasiilmiah.jpg') }}" alt="bg_image" class="cover-parallax">
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page"> Nos publications</div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Accueil</a> </li>
                                <li class="active">Publications</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----page header----->

    <div id="content" class="site-content ">

        <section class="blog-section">
            <!--===============spacing==============-->
            <div class="pd_top_80"></div>
            <!--===============spacing==============-->
            <div class="container">
                <div class="row gutter_35px">
                    <div class="col-lg-12">
                        <div class="title_all_box style_three text-center dark_color">
                            <div class="title_sections three">
                                <div class="before_title">Les publications scientifique du CAERED</div>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, autem amet quasi ducimus
                                    odio quia voluptate quibusdam ex accusantium aliquam commodi, corporis eius impedit.
                                    Sapiente deleniti numquam facilis sequi vel?
                                </p>
                            </div>
                            <!--===============spacing==============-->
                            <div class="mr_bottom_25"></div>
                            <!--===============spacing==============-->
                        </div>
                    </div>
                    <div id="content" class="site-content ">
                        <div class="auto-container">
                            <div class="row default_row">
                                <div id="primary" class="content-area service col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                    <!--===============spacing==============-->
                                    <div class="pd_top_90"></div>
                                    <!--===============spacing==============-->
                                    <main id="main" class="site-main" role="main">
                                        <article id
                                            class="clearfix service type-service status-publish has-post-thumbnail hentry">
                                            <div class="row grid_layout">
                                                @forelse ($publication as $item)
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 grid_box">
                                                        <div class="news_box style_five">
                                                            <div class="content_box">
                                                                <ul>
                                                                    <li>
                                                                        <div class="comments">
                                                                            <i class="icon-text"></i><a href="#" class="Comments are Closed">{{$item->Type->libelle}}</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <h2 class="title"><a href="{{url('single_publication/' .$item->id)}}" rel="bookmark">{{$item->titre}}</a></h2>
                                                                <p class="short_desc">{{$item->contenu}}</p>
                                                                <a href="{{url('single_publication/' .$item->id)}}" class="link__go">Voir plus<i class="icon-right-arrow-long"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                <p class="text-danger">Aucune publication disponible !</p>
                                                @endforelse
                                            </div>
                                        </article>
                                    </main>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_90"></div>
                                    <!--===============spacing==============-->
                                </div>
                                <aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
                                    <div class="side_bar">
                                        <!--===============spacing==============-->
                                        <div class="pd_top_90"></div>
                                        <!--===============spacing==============-->
                                        <div class="widgets_grid_box">
                                            <h2 class="widget-title">Categories de publication</h2>
                                            <ul class="wp-block-categories">
                                                @foreach (App\Models\TypePublication::all() as $item)
                                                    <li><a href="{{url('type_publication/' .$item->id)}}">{{$item->libelle}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="widgets_grid_box">
                                            <h2 class="widget-title">Publications recentes</h2>
                                            <div class="widget_post_box">
                                                <div class="blog_in clearfix image_in">
                                                    @foreach (App\Models\Publication::orderBy('created_at', 'DESC')->get() as $item)
                                                    <div class="image">
                                                        <img decoding="async" src="{{asset('assets/img/logo_caered.png')}}" alt="img">
                                                    </div>
                                                    <div class="content_inner">
                                                        <p class="post-date"><span class="icon-calendar"></span>{{$item->date_publication}}</p>
                                                        <h3><a href="{{route('gestion_publication.show', [$item->id])}}">{{$item->titre}}</a></h3>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---newsteller--->
        @include('require.newsletter')
        <!---newsteller end--->
    </div>
@endsection
