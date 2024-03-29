@section('title','Home')
@extends('frontend.layout.index')
@section('content')

    <!-- preloader area start -->
    
  
    <!-- banner start -->
    <div class="banner-area banner-area-1" style="background-image: url('{{asset('assets/img/banner/banner.png')}}');">
        <div class="banner-bg"></div>
        <ul class="banner-social-media">
            <li>
                <a class="btn-base-m" href="https://www.facebook.com/yugaljeeautomotive/" target="_blank">
                    <i class="ri-facebook-circle-line"></i>
                </a>
            </li>
            <li>
                <a class="btn-base-m" href="#">
                    <i class="ri-twitter-line"></i>
                </a>
            </li>
            <li>
                <a class="btn-base-m" href="https://www.instagram.com/yugaljeeauto/" target="_blank">
                    <i class="ri-instagram-line"></i>
                </a>
            </li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-slider owl-carousel">
                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 align-self-center">
                                    <div class="banner-inner style-white text-center text-lg-start">
                                        <h1 class="b-animate-2 title">The Professional
                                            Car Repair system
                                            And Maintenance.</h1>
                                            <p class="content b-animate-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                        <div class="btn-wrap b-animate-4">
                                            <a class="btn btn-base me-3" href="{{route('frontend.contact')}}">Explore More <i class="ri-arrow-right-line"></i></a>
                                            <a class="btn btn-border-white" href="{{route('frontend.contact')}}">Contact Us <i class="ri-arrow-right-line"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-11 mt-5 mt-lg-0 align-self-center">
                                    <div class="thumb">
                                        <img src="assets/img/banner/1.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 align-self-center">
                                    <div class="banner-inner style-white text-center text-lg-start">
                                        <h1 class="b-animate-2 title">Highly Modified
                                            Car Repair system
                                            And Maintenance.</h1>
                                            <p class="content b-animate-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                        <div class="btn-wrap b-animate-4">
                                            <a class="btn btn-base me-3" href="{{route('frontend.contact')}}">Explore More <i class="ri-arrow-right-line"></i></a>
                                            <a class="btn btn-border-white" href="{{route('frontend.contact')}}">Contact Us <i class="ri-arrow-right-line"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-11 mt-5 mt-lg-0">
                                    <div class="thumb">
                                        <img src="assets/img/banner/1.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end --> 
    
    <!-- service-form area start -->
    <div class="service-form-area pd-bottom-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="service-form-wrap">
                        <h3>Book a Service</h3>
                        <form class="default-form-wrap" id="appointment" method="post" action="{{route('admin.order.store')}}">
                        @csrf    
                        <div class="row g-3">
                                <div class="col-md-6">
                                   <input type="text"  name="name" class="selet-area  w-100 @error('name') alert-danger @enderror" placeholder="FullName">
                                </div>
                                <div class="col-md-6">
                                <input type="text"  name="carnum" class="selet-area  w-100  @error('carnum') alert-danger @enderror" placeholder="Car Number">
                                </div>
                                <div class="col-md-6">
                                <input type="number"  name="phone" class="selet-area  w-100  @error('phone') alert-danger @enderror" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6">
                                <input type="email"  name="email"  class="selet-area  w-100 @error('email') alert-danger @enderror" placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <select class="selet-area single-select w-100 @error('service') alert-danger @enderror" name="service" >
                                    @foreach($service as $service)   

                                    
                                    <option>{{$service->name}}</option>
                                        
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="selet-area single-select w-100 @error('type') alert-danger @enderror" id="typein"  name="type">
                                        
                                        <option>Walk in</option>
                                        <option>Pickup</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                <input style="display:none;" type="text" id="location"  name="address" class="selet-area  w-100 @error('address') alert-danger @enderror" placeholder="Picupaddress" value="1">
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-base m-0 w-100">Search Inventory</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <div class="partner-slider pd-top-60 owl-carousel">  
                        <div class="item">
                            <img src="assets/img/partner/1.png" alt="img">
                        </div>
                        <div class="item">
                            <img src="assets/img/partner/2.png" alt="img">
                        </div>
                        <div class="item">
                            <img src="assets/img/partner/3.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-form area end -->

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
                    <div class="col-lg-6 mt-5 mt-lg-0 align-self-center">
                        <div class="about-inner-wrap">  
                            <div class="section-title mb-0">
                                <h6 class="sub-title left-line">About Us</h6>
                                <h2 class="title left-line">Welcome to our car
                                    repairing <span>shop</span></h2>
                                <p class="content mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="about-counter-wrap">
                                            <div class="media">
                                                <h2><span class="counter">25</span>+</h2>
                                                <h4>Experience
                                                Members</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
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

    <!-- service start -->
    <div class="service-area bg-overlay pd-top-115 pd-bottom-120" style="background-image: url(assets/img/service/service-bg.png);"> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title style-white text-center">
                        <h6 class="sub-title double-line"><span></span>  Best Services</h6>
                        <h2 class="title">Provide our best services</h2>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-0">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner border-right border-bottom text-center">
                        <div class="bg-img"><img src="assets/img/service/bg-img.png" alt="img"></div>
                        <div class="details">
                            <div class="thumb">
                                <img src="assets/img/service/1.png" alt="img">
                            </div>
                            <h3><a href="service-details.html">Engine Repair</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <a class="btn-arrow" href="service-details.html"><i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner border-right border-bottom text-center">
                        <div class="bg-img"><img src="assets/img/service/bg-img.png" alt="img"></div>
                        <div class="details">
                            <div class="thumb">
                                <img src="assets/img/service/2.png" alt="img">
                            </div>
                            <h3><a href="service-details.html">Brake Repair</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <a class="btn-arrow" href="service-details.html"><i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner border-bottom text-center">
                        <div class="bg-img"><img src="assets/img/service/bg-img.png" alt="img"></div>
                        <div class="details">
                            <div class="thumb">
                                <img src="assets/img/service/3.png" alt="img">
                            </div>
                            <h3><a href="service-details.html">Car Wash</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <a class="btn-arrow" href="service-details.html"><i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner border-right text-center">
                        <div class="bg-img"><img src="assets/img/service/bg-img.png" alt="img"></div>
                        <div class="details">
                            <div class="thumb">
                                <img src="assets/img/service/4.png" alt="img">
                            </div>
                            <h3><a href="service-details.html">Electrical system</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <a class="btn-arrow" href="service-details.html"><i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner border-right text-center">
                        <div class="bg-img"><img src="assets/img/service/bg-img.png" alt="img"></div>
                        <div class="details">
                            <div class="thumb">
                                <img src="assets/img/service/5.png" alt="img">
                            </div>
                            <h3><a href="service-details.html">Tire Balance</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <a class="btn-arrow" href="service-details.html"><i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="bg-img"><img src="assets/img/service/bg-img.png" alt="img"></div>
                        <div class="details">
                            <div class="thumb">
                                <img src="assets/img/service/6.png" alt="img">
                            </div>
                            <h3><a href="service-details.html">Suspension Repair</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <a class="btn-arrow" href="service-details.html"><i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center pd-top-60">
                    <a class="btn btn-base" href="service.html">View All Services <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- service end -->

    <!-- wcu area start -->
    <div class="wcu-area bg-relative pd-top-120 pd-bottom-120">
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

    <!-- gallery area start -->
    <div class="gallery-area bg-gray pd-top-115 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h6 class="sub-title double-line"><span></span>  Our Works</h6>
                        <h2 class="title">Our featured gallery</h2>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-wrap">
                        <img src="assets/img/gallery/1.png" alt="img">
                        <a class="gallery-btn" href="assets/img/gallery/1.png" data-effect="mfp-zoom-in"><span><i class="ri-zoom-in-line"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-wrap">
                        <img src="assets/img/gallery/2.png" alt="img">
                        <a class="gallery-btn" href="assets/img/gallery/2.png" data-effect="mfp-zoom-in"><span><i class="ri-zoom-in-line"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-wrap">
                        <img src="assets/img/gallery/3.png" alt="img">
                        <a class="gallery-btn" href="assets/img/gallery/3.png" data-effect="mfp-zoom-in"><span><i class="ri-zoom-in-line"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-wrap">
                        <img src="assets/img/gallery/4.png" alt="img">
                        <a class="gallery-btn" href="assets/img/gallery/4.png" data-effect="mfp-zoom-in"><span><i class="ri-zoom-in-line"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-wrap">
                        <img src="assets/img/gallery/5.png" alt="img">
                        <a class="gallery-btn" href="assets/img/gallery/5.png" data-effect="mfp-zoom-in"><span><i class="ri-zoom-in-line"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-wrap">
                        <img src="assets/img/gallery/6.png" alt="img">
                        <a class="gallery-btn" href="assets/img/gallery/6.png" data-effect="mfp-zoom-in"><span><i class="ri-zoom-in-line"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery area end -->

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
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
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
                <div class="col-lg-3 col-md-6">
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
                <div class="col-lg-3 col-md-6">
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
                <div class="col-lg-3 col-md-6">
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

    <!-- testimonial area start -->
    <div class="testimonial-area style-one" style="background-image: url('assets/img/testimonial/1.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-5">
                    <div class="testimonial-inner">
                        <div class="section-title">
                            <h6 class="sub-title left-line">Testimonial</h6>
                            <h2 class="title">What our clients saying?</h2>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="testimonial-slider slider-control-dots owl-carousel">
                            <div class="item">
                                <div class="single-testimonial-inner">
                                    <p><span class="left-quote"><i class="fas fa-quote-left"></i></span>    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercite ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repre in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <span class="right-quote"><i class="fas fa-quote-right"></i></span></p>
                                    <h4>Recharlison jebruina</h4>
                                    <span>Creative Director</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial-inner">
                                    <p><span class="left-quote"></span>    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercite ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repre in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <span class="right-quote"><i class="fas fa-quote-right"></i></span></p>
                                    <h4>Recharlison jebruina</h4>
                                    <span>Creative Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->

    <!--blog-area start-->
    <div class="blog-area pd-top-190 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h6 class="sub-title double-line"><span></span>  News & Blogs </h6>
                        <h2 class="title">Latest news & blog feed</h2>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner">
                        <div class="thumb">
                            <img src="assets/img/blog/1.png" alt="img">
                            <div class="blog-meta">
                                Nov 25, 2021
                            </div>
                        </div>
                        <div class="details">                            
                            <h4><a href="blog-details.html">How to boost up your vehicle engine</a></h4>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            <a class="read-more-text" href="blog-details.html">Read More <i class="ri-arrow-right-line"></i></a>
                            <ul>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                                <li><a href="#"><i class="ri-share-line"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner">
                        <div class="thumb">
                            <img src="assets/img/blog/2.png" alt="img">
                            <div class="blog-meta">
                                Nov 25, 2021
                            </div>
                        </div>
                        <div class="details">
                            
                            <h4><a href="blog-details.html">Get Some Useful Car Maintenance Tips</a></h4>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            <a class="read-more-text" href="blog-details.html">Read More <i class="ri-arrow-right-line"></i></a>
                            <ul>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                                <li><a href="#"><i class="ri-share-line"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner">
                        <div class="thumb">
                            <img src="assets/img/blog/3.png" alt="img">
                            <div class="blog-meta">
                                Nov 25, 2021
                            </div>
                        </div>
                        <div class="details">
                            
                            <h4><a href="blog-details.html">Four Maintenance Tips To Preserve Engine</a></h4>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            <a class="read-more-text" href="blog-details.html">Read More <i class="ri-arrow-right-line"></i></a>
                            <ul>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                                <li><a href="#"><i class="ri-share-line"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog-area end-->
@endsection
