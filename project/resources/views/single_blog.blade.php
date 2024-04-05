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
                                <li class="active">Detail blog</li>
                            </ul>
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
                <div id="primary" class="content-area service col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <main id="main" class="site-main" role="main">
                        <!--===============spacing==============-->
                        <div class="pd_top_50"></div>
                        <!--===============spacing==============-->
                        <section class="blog_single_details_outer">
                            <div class="single_content_upper">
                                <div class="blog_feature_image">
                                    <img src="{{ asset('assets/images/my_blog.jpg') }}" class="wp-post-image"
                                        alt="img">
                                </div>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_30"></div>
                                <!--===============spacing==============-->
                                <div class="post_single_content">
                                    <h5>{{ $find->titre }}</h5>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_15"></div>
                                    <!--===============spacing==============-->
                                    <div class="description_box">
                                        <p>{{ $find->contenu }}</p>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_15"></div>
                                    <!--===============spacing==============-->
                                </div>
                            </div>
                            <h3>Commentaires</h3>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_15"></div>
                            <!--===============spacing==============-->
                            
                            <!--===============spacing==============-->
                            <div class="pd_bottom_15"></div>
                            <!--===============spacing==============-->
                            @foreach (App\Models\Comment::where('posts_id', '=', $find->id)->get() as $item)
                                <div class="content_box_cn style_one">
                                    <div class="txt_content">
                                        <h6>
                                            <a href="#" target="_blank" rel="nofollow">{{ $item->User->nom }} {{ $item->User->prenom }}</a>
                                        </h6>
                                        <p>
                                            {{ $item->comment_content }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            <!--===============spacing==============-->
                            <div class="pd_bottom_15"></div>
                            <!--===============spacing==============-->

                            <div class="single_content_lower">
                                <div class="sec_comments padding-t-8 padding-b-3" id="comment">
                                    <div class="container_no">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div id="respond" class="comment-respond">
                                                    <h3 id="reply-title" class="comment-reply-title">
                                                        Publier un commentaire
                                                    </h3>
                                                    <form action="{{ route('gestion_comment.store') }}" method="POST" class="comment-form">
                                                        @csrf
                                                        <p class="title_para">Votre adresse email ne sera pas publiée..
                                                        </p>
                                                        <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                                                        <input name="posts_id" type="text" value="{{ $find->id }}" hidden>
                                                        <p class="comment-form-comment">
                                                            <textarea placeholder="Tapez le commentaire ici..." name="comment_content" rows="5" aria-required="true"></textarea>
                                                        </p>
                                                        <p class="form-submit">
                                                            <input type="submit" class="submit" value="Publier">
                                                        </p>
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
                <aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
                    <div class="side_bar">
                        <!--===============spacing==============-->
                        <div class="pd_top_90"></div>
                        <!--===============spacing==============-->
                        <div class="widgets_grid_box">
                            <h2 class="widget-title">Categories de publication</h2>
                            <ul class="wp-block-categories">
                                @foreach (App\Models\TypePublication::all() as $item)
                                    <li><a href="#">{{ $item->libelle }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widgets_grid_box">
                            <h2 class="widget-title">Posts recentes</h2>
                            <div class="widget_post_box">
                                <div class="blog_in clearfix image_in">
                                    @foreach (App\Models\Post::OrderBy('created_at', 'ASC')->get() as $item)
                                        <div class="image">
                                            <img decoding="async" src="{{ asset('assets/img/logo_caered.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="content_inner">
                                            <p class="post-date"><span
                                                    class="icon-calendar"></span>{{ $item->date_publication }}</p>
                                            <h3><a
                                                    href="{{ route('gestion_publication.show', [$item->id]) }}">{{ $item->titre }}</a>
                                            </h3>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_70"></div>
                        <!--===============spacing==============-->
                    </div>
                </aside>
            </div>
        </div>
        <!---newsteller--->
        <section class="newsteller style_one bg_dark_1">
            <!--===============spacing==============-->
            <div class="pd_top_40"></div>
            <!--===============spacing==============-->
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="content">
                            <h2>Join Our Mailing List</h2>
                            <p>For receiving our news and updates in your inbox directly. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="item_scubscribe">
                            <div class="input_group">
                                <form class="mc4wp-form" method="post" data-name="Subscibe">
                                    <div class="mc4wp-form-fields">
                                        <input type="email" name="EMAIL" placeholder="Your email address"
                                            required="">
                                        <input type="submit" value="Sign up">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_40"></div>
            <!--===============spacing==============-->
        </section>
        <!---newsteller end--->
    </div>

    <!---newsteller--->
    @include('require.newsletter')
    <!---newsteller end--->
@endsection
