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
                                Nos projets
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

    <section class="blog-section">
        <!--===============spacing==============-->
        <div class="pd_top_80"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row gutter_35px">
                <div class="col-lg-12">
                    <div class="title_all_box style_three text-center dark_color">
                        <div class="title_sections three">
                            <div class="before_title">Les projets du CAERED</div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure est perferendis
                                rem temporibus sunt soluta culpa porro, non corporis laboriosam eligendi dolores
                                exercitationem ex nostrum doloremque voluptatem dicta nisi ratione?
                            </p>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_25"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
        </div>

        <!--===============spacing==============-->
        <div class="pd_bottom_60"></div>
        <!--===============spacing==============-->

        <div class="container">
            <div class="project_container clearfix">
                <div class="row clearfix">
                    @forelse ($collection as $item)
                        <div class="project-wrapper grid-item col-lg-12 col-md-12 col-sm-12 col-xs-12  project_category-values">
                            <div class="project_box style_three clearfix">
                                <div class="content_inner">
                                    <div><a href="{{url('single_project/' .$item->id)}}">{{$item->lieu}}</a></div>
                                    <h2><a href="{{url('single_project/' .$item->id)}}">{{$item->titre}}</a></h2>
                                    <p class="short_desc">{{$item->observation}}</p>
                                    <a href="{{url('single_project/' .$item->id)}}" class="read_more">Voir plus<span
                                            class="icon-right-arrow-long"></span></a>
                                    <div class="share_me">
                                        <div class="share_socail">
                                            <div class="title">Suivre...</div>
                                            <button class="m_icon" title="facebook" data-sharer="facebook"
                                                data-title="Six Essential Steps To Writing Successful Job"
                                                data-url="{{url('single_project/' .$item->id)}}">
                                                <i class="fa fa-facebook"></i>
                                            </button>
                                            <button class="m_icon" title="whatsapp" data-sharer="whatsapp"
                                                data-title="Six Essential Steps To Writing Successful Job"
                                                data-url="{{url('single_project/' .$item->id)}}">
                                                <i class="fa fa-whatsapp"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="image">
                                    <img width="370" height="247"
                                        src="{{ asset('assets/images/projectmanagement.jpg') }}" class="wp-post-image"
                                        alt="img">
                                    <a href="project-details.html" class="pro-link"></a>
                                    <div class="overlay"> </div>
                                    <div class="text">
                                        <ul>
                                            <li>Date debut : <span>{{$item->date_debut}}</span></li>
                                            <li>Date fin :<span>{{$item->date_fin}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    <p class="text-danger">Aucun projet n'est disponible</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!---newsteller--->
    @include('require.newsletter')
    <!---newsteller end--->
@endsection
