
@section('title','Our Service')
@extends('frontend.layout.index')
@section('content')


    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/other/bredcrumb-bg.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0">
                    <h2 class="page-title">About Us</h2>
                    <ul class="page-list">
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    
    <!-- partner area start -->
    <div class="partner-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="partner-slider-2 owl-carousel">  
                        <div class="item">
                            <img src="assets/img/partner/1.png" alt="img">
                        </div>
                        <div class="item">
                            <img src="assets/img/partner/2.png" alt="img">
                        </div>
                        <div class="item">
                            <img src="assets/img/partner/3.png" alt="img">
                        </div>
                        <div class="item">
                            <img src="assets/img/partner/4.png" alt="img">
                        </div>
                        <div class="item">
                            <img src="assets/img/partner/5.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partner area end -->

    <!-- about area start -->
    <div class="about-area bg-relative pd-bottom-120">
        <div class="container">
            <div class="about-area-inner">
                <div class="row">
                    <div class="col-lg-6 col-md-11">
                        <div class="about-thumb-wrap">
                            <img class="img-1 wow fadeInLeft animated" src="assets/img/about/1.png" alt="img">
                            <img class="img-2 wow fadeInRight animated" src="assets/img/about/2.png" alt="img">
                            <img class="img-3 wow fadeInUp animated" src="assets/img/about/3.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0 align-self-center">
                        <div class="about-inner-wrap">  
                            <div class="section-title mb-0">
                                <h6 class="sub-title left-line">About Us</h6>
                                <h2 class="title left-line">Welcome to our car
                                    repairing <span>shop</span></h2>
                                <p class="content mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="about-counter-wrap">
                                            <div class="media">
                                                <h2><span class="counter">25</span>+</h2>
                                                <h4>Experience
                                                Members</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="about-counter-wrap">
                                            <div class="media">
                                                <h2><span class="counter">5</span>k+</h2>
                                                <h4>Satisfied
                                                    Clients</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-base me-3" href="about.html">About More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- intro area start -->
    <div class="intro-area bg-overlay-2 pd-top-170 pd-bottom-90" style="background-image: url(assets/img/intro/bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-wrap">
                        <span class="bg-border"></span>
                        <div class="thumb">
                            <img src="assets/img/intro/1.png" alt="img">
                        </div>
                        <div class="details">
                            <h3>Looking For A Car Part’s?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a class="btn btn-border-white" href="shop.html">Buy Part’s <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-wrap">
                        <span class="bg-border"></span>
                        <div class="thumb">
                            <img src="assets/img/intro/2.png" alt="img">
                        </div>
                        <div class="details">
                            <h3>Want To Sell A Car Part’s?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a class="btn btn-border-white" href="shop.html">Sell Your Part’s <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-wrap">
                        <span class="bg-border"></span>
                        <div class="thumb">
                            <img src="assets/img/intro/3.png" alt="img">
                        </div>
                        <div class="details">
                            <h3>Book A Car Repair?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a class="btn btn-border-white" href="shop.html">Book Services <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- intro area end -->

    <!-- wcu area start -->
    <div class="wcu-area bg-relative pd-top-120">
        <div class="container">
            <div class="about-area-inner">
                <div class="row">
                    <div class="col-lg-6 col-md-11 mb-lg-0 mb-5 order-lg-2">
                        <div class="wcu-thumb-wrap">
                            <img class="img-1 wow fadeInLeft animated" src="assets/img/other/wcu-1.png" alt="img">
                            <img class="img-2 wow fadeInRight animated" src="assets/img/other/wcu-2.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="section-title mb-0">
                            <h6 class="sub-title left-line">Why Choose Us</h6>
                            <h2 class="title left-line">Our best advantages</h2>
                            <p class="content mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li><i class="ri-check-double-line"></i>Low Price Guarantee</li>
                                        <li><i class="ri-check-double-line"></i>Trained Technicians</li>
                                        <li><i class="ri-check-double-line"></i>Life-Time Warranty</li>
                                        <li><i class="ri-check-double-line"></i>Automated testing lanes</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li><i class="ri-check-double-line"></i>Quick Service Times</li>
                                        <li><i class="ri-check-double-line"></i>Free Trade Appraisal</li>
                                        <li><i class="ri-check-double-line"></i>Genuine spare parts</li>
                                        <li><i class="ri-check-double-line"></i>Unbeatable savings!</li>
                                    </ul>
                                </div>
                            </div>
                            <a class="btn btn-base me-3" href="about.html">Learn More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!-- wcu area end -->

    <!-- team area start -->
    <div class="team-area pd-top-115 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h6 class="sub-title double-line"><span></span>  Team </h6>
                        <h2 class="title">Meet our expart technicians</h2>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center owl-carousel owl-theme" id="team-slider">
                <div class="">
                    <div class="single-team-wrap">
                        <div class="thumb">
                            <img src="assets/img/team/1.png" alt="img">
                        </div>
                        <div class="details">
                            <h4>Imon Hossain</h4>
                            <ul class="social-media">
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-skype"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-vimeo-v"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>                        
                    </div>
                </div>
                <div class="">
                    <div class="single-team-wrap">
                        <div class="thumb">
                            <img src="assets/img/team/2.png" alt="img">
                        </div>
                        <div class="details">
                            <h4>Alesia Bless</h4>
                            <ul class="social-media">
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-skype"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-vimeo-v"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>                        
                    </div>
                </div>
                <div class="">
                    <div class="single-team-wrap">
                        <div class="thumb">
                            <img src="assets/img/team/3.png" alt="img">
                        </div>
                        <div class="details">
                            <h4>Tommy Jain</h4>
                            <ul class="social-media">
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-skype"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-vimeo-v"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>                        
                    </div>
                </div>
                <div class="">
                    <div class="single-team-wrap">
                        <div class="thumb">
                            <img src="assets/img/team/4.png" alt="img">
                        </div>
                        <div class="details">
                            <h4>Joe Young</h4>
                            <ul class="social-media">
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-skype"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn-base-m" href="#">
                                        <i class="fab fa-vimeo-v"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area end -->
    @push('custom-scripts')
   
   
    @endpush
    
@endsection