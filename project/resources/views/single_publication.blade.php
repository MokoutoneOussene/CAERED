@extends('layouts.main')

@section('contant')
    <!----page header----->
    <div class="page_header_default style_one blog_single_pageheader">
        <div class="parallax_cover">
            <div class="simpleParallax">
                <img src="{{ asset('assets/images/publikasiilmiah.jpg') }}" alt="bg_image" class="img-fluid">
            </div>
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">{{ $find->titre }}</div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('publication') }}">Publication</a></li>
                                <li class="active">Detail publication</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="meta_blog_single">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="left_side">
                            <div class="category"><a href="#" class="categors"><i
                                        class="icon-folder"></i>{{ $find->Type->libelle }}</a>
                            </div>
                            <div class="comments">
                                <i class="icon-text"></i>
                                <a href="#comment" class="Comments are Closed">Commenter</a>
                            </div>
                        </div>
                        <div class="right_side">
                            <div class="content_box_auht d-flex">
                                <div class="authour_content">
                                    <h6>Publier par</h6>
                                    <h4>{{ $find->User->nom }} {{ $find->User->prenom }}</h4>
                                </div>
                                <div class="authour_image">
                                    <img alt="profil users" src="{{ asset('storage') . '/' . $find->User->photo }}"
                                        height="50" width="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----page header----->

    <div id="content" class="site-content ">
        <div class="auto-container">
            <div class="row default_row">
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
                <div id="primary" class="content-area service col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <main id="main" class="site-main" role="main">
                        <!--===============spacing==============-->
                        <div class="pd_top_50"></div>
                        <!--===============spacing==============-->
                        <section class="blog_single_details_outer">
                            <div class="single_content_upper">
                                <div class="blog_feature_image">
                                    <img src="{{asset('assets/images/publikasiilmiah.jpg')}}" class="wp-post-image" alt="img">
                                </div>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_20"></div>
                                <!--===============spacing==============-->
                                <div class="post_single_content">
                                    <h5>{{$find->titre}}</h5>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_15"></div>
                                    <!--===============spacing==============-->
                                    <div class="description_box">
                                        <p>{{$find->contenu}}</p>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_15"></div>
                                    <!--===============spacing==============-->
                                </div>
                            </div>
                            <div class="single_content_lower">
                                <div class="sec_comments padding-t-8 padding-b-3" id="comment">
                                    <div class="container_no">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div id="respond" class="comment-respond">
                                                    <h3 id="reply-title" class="comment-reply-title">
                                                        Commenter cette publication
                                                    </h3>
                                                    <form action="#" method="post" id="commentform"
                                                        class="comment-form">
                                                        <p class="title_para">Votre adresse email ne sera pas publiée.</p>
                                                        <p class="comment-form-comment"><label for="comment">Laisser une réponse</label>
                                                            <textarea placeholder="Laisser votre commentaire ici ..." id="comment" name="comment" rows="12"
                                                                aria-required="true"></textarea>
                                                        </p>
                                                        <div class="clearfix"></div>
                                                        <div class="">
                                                            <p class="form-submit">
                                                                <input name="submit" type="submit" id="submit" class="submit" value="Publier">
                                                            </p>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- #respond -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_70"></div>
                        <!--===============spacing==============-->
                    </main>
                </div>
            </div>
        </div>
        <!---newsteller--->
        @include('require.newsletter')
        <!---newsteller end--->
    </div>
@endsection
