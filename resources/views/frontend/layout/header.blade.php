<div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="#" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->

    <!-- navbar start -->
    <div class="navbar-area">
        <!-- navbar top start -->
        <div class="navbar-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-md-left text-center">
                        <ul class="topbar-left">
                            <li><a href="tel:+917669631031"><i class="fa fa-phone-alt"></i> +91 7669631031</a></li>
                            <li><i class="fas fa-clock"></i> Opening Hours:   Mon-Fri: 8:30am-6:30pm</li>
                            <li><i class="fas fa-map-marker-alt"></i>Plot No. 04,Dhoom Manikpur, Dadri, Uttar Pradesh 203207</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-area navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#edumint_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="{{route('frontend.home')}}"><img src="{{asset('assets/img/logo/cropped-logo.png')}}" alt="img"></a>
                </div>
                <div class="nav-left-part">
                      
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search-bar-btn" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="edumint_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class="current-menu-item">
                            <a href="{{route('frontend.home')}}">Home</a>
                            
                        </li>
                        <li>
                            <a href="{{route('frontend.service')}}">Service</a>
                        </li>
                        <li>
                            <a href="{{route('frontend.about')}}">About Us</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="#">Team</a></li>
                            </ul> -->
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="#">Offers</a></li>
                                <li><a href="#">Blogw</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <a class="search-bar-btn" href="#"><i class="ri-search-line"></i></a>
                    <!-- <a class="cart-btn" href="#"><i class="ri-shopping-cart-2-line"></i> -->
                    <!-- <span>0</span></a> -->
                    <a class="btn btn-base" href="{{route('frontend.contact')}}">Get A Quote <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->