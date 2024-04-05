<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from themepanthers.com/html/creote-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 11:36:37 GMT -->

<head>
    @include('layouts.style')
</head>

<body class="theme-creote">
    <div id="page" class="page_wapper hfeed site">
        <!---============== wrapper_full =================-->
        <div id="wrapper_full" class="content_all_warpper">
            <!----preloader----->
            <div class="preloader-wrap">
                <div class="preloader" style="background-image:url(assets/images/preloader.gif)">
                </div>
                <div class="overlay"></div>
            </div>
            <!----preloader----->

            <!----header----->

            @include('require.header')

            <!----header end----->

            <div id="content" class="site-content">

                @yield('contant')

            </div>

        </div>
        <!---============== wrapper_full =================-->

        <!---==============footer start =================-->

        @include('require.footer')

        <!---==============footer end =================-->

        <!---==============mobile menu =================-->
        <div class="crt_mobile_menu">
            <div class="menu-backdrop"></div>
            <nav class="menu-box">
                <div class="close-btn"><i class="icon-close"></i></div>
                <form role="search" method="get" action="#">
                    <input type="search" class="search" placeholder="Search..." value="" name="s"
                        title="Search" />
                    <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
                </form>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div>
        <!---==============mobile menu end =================-->
        <!---==============search popup =================-->

        @include('require.recherche_modal')

        <!---==============search popup end =================-->
        <!---==============modal popup =================-->

        @include('require.login_modal')

        <!---==============modal popup end=================-->

    </div>
    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!---========================== javascript ==========================-->
    @include('layouts.script')

</body>

<!-- Mirrored from themepanthers.com/html/creote-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 11:36:37 GMT -->

</html>
