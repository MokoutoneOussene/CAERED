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
                                Nos blogs
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Accueil</a> </li>
                                <li class="active">Blogs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----page header----->

    <div id="content" class="site-content ">

        <section class="blog_post_section four_column news_wrapper_grid style_six ">
            <!--===============spacing==============-->
            <div class="pd_top_80"></div>
            <!--===============spacing==============-->
            <div class="container">
                <div class="col-lg-12">
                    <div class="title_all_box style_three text-center dark_color">
                        <div class="title_sections three">
                            <div class="before_title">Les différents blog du CAERED</div>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="grid_show_case grid_layout clearfix">
                            @foreach ($collection as $item)
                                <div class="news_box style_six grid_box _card has_images">
                                    <div class="content_box">
                                        <div class="overlay"> </div>
                                        <img src="{{asset('assets/images/blog/blog-image-3.jpg')}}" class="img-fluid" alt="img">
                                        <div class="content_mid">
                                            <span class="date_in_number">{{ $item->created_at }}</span>
                                            <h2 class="title"><a href="{{url('single_blog/' .$item->id)}}" rel="bookmark">{{ $item->titre }}</a></h2>
                                        </div>
                                        <div class="auhtour_box">
                                            <img alt="img" src="{{ asset('storage') . '/' . $item->User->photo }}" height="60" width="60"
                                                class="img-fluid">
                                            <div class="contnet_a">
                                                <p>POSTE PAR</p>
                                                <h4> {{$item->User->nom}} {{$item->User->prenom}} </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_top_70"></div>
            <!--===============spacing==============-->

        </section>

        <!---newsteller--->
        @include('require.newsletter')
        <!---newsteller end--->
    </div>
@endsection
