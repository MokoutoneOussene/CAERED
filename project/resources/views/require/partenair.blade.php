<section class="client-brand" style="background: rgb(232, 237, 237)">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-3 mb-lg-0 mb-xl-0">
                <div class="title_all_box style_one  dark_color">
                    <div class="title_sections left">
                        <div class="before_title">Liste de nos</div>
                        <h2>Partenaires d'affaires</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <p>Denounce with righteous indignation and dislike men who are beguiled and demoralized by the
                    charms of pleasure.</p>
                <div class="theme_btn_all color_one">
                    <a href="{{ route('contact') }}" rel="nofollow" class="theme-btn four">Contact Us <i
                            class="icon-right-arrow"></i></a>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_20"></div>
        <!--===============spacing==============-->
        <div class="row">
            <div class="col-lg-12">
                <div class="client_logo_carousel type_one">
                    <div class="swiper-container"
                        data-swiper='{
                "autoplay": {
                  "delay": 6000
                },
                "freeMode": false,
                "loop": true,
                "speed": 1000,
                "centeredSlides": false,
                "slidesPerView": 4,
                "spaceBetween": 30,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                },
                "breakpoints": {
                   "1200": {
                      "slidesPerView": 4
                   },
                   "1024": {
                    "slidesPerView": 3
                   },
                  "768": {
                    "slidesPerView": 2
                  },
                  "400": {
                    "slidesPerView": 2
                  } ,
                  "0": {
                    "slidesPerView": 1
                  }
                }
              }'>
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Partenaire::all() as $item)
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="{{ asset('storage') . '/' . $item->logo }}" alt="clients-logo">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_20"></div>
    <!--===============spacing==============-->
</section>
