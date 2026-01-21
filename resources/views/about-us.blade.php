@extends('layouts.main')
@section('content')
<!-- ================= About Banner ================= -->
<!-- About page area -->
        <div class="about-page-area">

            <div class="about__us_page_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner_h2__left_image">
                                <img alt="" src="{{asset('assets/images/banner/about-us-img1.webp')}}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="banner_h2_Right_text">
                                <div class="wpb_wrapper">
                                    <h3>WE CREATE <br> HTML TEMPLATES.</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                    facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore
                                    te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                                    placerat facer possim assum. Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem.</p>
                                    <p class="text-center">
                                        <a href="#"> view work </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="funfact-area bg--white" id="funfact-area">
                <div class="funfacts">
                    <div class="container">
                        <div class="row g-0">

                            <!--  Single Funfact -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="funfact">
                                    <div class="fun__fact_img">
                                        <img src="{{asset('assets/images/icon-img/about-us-icon1.webp')}}" alt="">
                                    </div>
                                    <div class="fun_fact_info">
                                        <h1>
                                            <span class="counter">2169</span>
                                        </h1>
                                        <h5>HAPPY CUSTOMERS</h5>
                                    </div>
                                </div>
                            </div>
                            <!--//  Single Funfact -->

                            <!--  Single Funfact -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="funfact">
                                    <div class="fun__fact_img">
                                        <img src="{{asset('assets/images/icon-img/about-us-icon2.webp')}}" alt="">
                                    </div>
                                    <div class="fun_fact_info">
                                        <h1>
                                            <span class="counter">369</span>
                                        </h1>
                                            <h5>AWARDS WINNED</h5>
                                    </div>
                                </div>
                            </div>
                            <!--//  Single Funfact -->

                            <!--  Single Funfact -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="funfact">
                                    <div class="fun__fact_img">
                                        <img src="{{asset('assets/images/icon-img/about-us-icon3.webp')}}" alt="">
                                    </div>
                                    <div class="fun_fact_info">
                                        <h1>
                                            <span class="counter">689</span>
                                        </h1>
                                        <h5>HOURS WORKED</h5>
                                    </div>
                                </div>
                            </div>
                            <!--//  Single Funfact -->

                            <!--  Single Funfact -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="funfact">
                                    <div class="fun__fact_img">
                                        <img src="{{asset('assets/images/icon-img/about-us-icon4.webp')}}" alt="">
                                    </div>
                                    <div class="fun_fact_info">
                                        <h1>
                                            <span class="counter">2169</span>
                                        </h1>
                                        <h5>COMPLETE PROJECTS</h5>
                                    </div>
                                </div>
                            </div>
                            <!--//  Single Funfact -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="abou_skrill__area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="skrill_here">
                                <h3>WE HAVE SKILLS TO SHOW</h3>
                                <div class="ht-single-about">
                                    <div class="skill-bar">
                                        <div class="skill-bar-item">
                                            <span>WEB DESIGN</span>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft width80" data-progress="80%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span class="text-top">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-bar-item">
                                            <span>PHP &amp; JAVASCRIPT</span>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft width90" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span class="text-top">90%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-bar-item">
                                            <span>HTML5 &amp; CSS3</span>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft width70" data-progress="70%"  data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span class="text-top">70%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-bar-item">
                                            <span>wordpress</span>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft width95" data-progress="95%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span class="text-top">95%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner_h2__left_image lft_to_right">
                                <img alt="" src="{{asset('assets/images/banner/about-us-img2.webp')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- About page area end-->

@endsection
@section('css')
    <style type="text/css">
        /*in page css here*/
    </style>
@endsection
@section('js')
    <script type="text/javascript">
        (() => {
            /*in page js here*/
        })()
    </script>
@endsection