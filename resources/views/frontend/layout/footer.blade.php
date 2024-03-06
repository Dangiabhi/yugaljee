
    <!-- subscribe area start -->
    <div class="subscribe-area bg-gray">
        <div class="container">
            <div class="subscribe-inner">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-4 mb-lg-0">
                        <h3>Subscribe for latest newsletter</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="single-subscribe-inner style-two">
                            <input type="text" placeholder="Your email address">
                            <button class="btn btn-base">Subscribe Now <i class="ri-arrow-right-line ms-2"></i></button>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- subscribe area end -->

    <!-- footer area start -->
    <footer class="footer-area bg-overlay pd-top-120" style="background-image: url('{{asset('assets/img/other/footer-bg.png')}}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget widget_about pr-xl-4">
                        <div class="thumb footer-logo">
                            <img src="{{asset('assets/img/logo/cropped-logo.png')}}" alt="img">
                        </div>
                        <div class="details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
                <div class="col-lg-2 col-md-6">
                    <div class="widget widget_nav_menu">
                        <h3 class="widget-title">Our Links</h3>
                        <ul>
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="{{route('frontend.service')}}">Our Service</a></li>
                            <li><a href="shop.html">How it works</a></li>
                            <li><a href="{{route('frontend.term')}}">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_contact pl-lg-3">
                        <h3 class="widget-title">Contact info</h3>
                        <ul class="details">
                            <li><i class="fa fa-map-marker-alt"></i> Plot No. 04. Khasra No. 2928,Chha Dhoom Manikpur, Dadri, Uttar Pradesh 203207</li>
                            <li><a href="tel:+917669631030"><i class="fa fa-phone-alt"></i> +91 7669631030</a></li>
                            <li><a href="tel:+917669631031"><i class="fa fa-phone-alt"></i> +91 7669631031</a></li>
                            <li><i class="fa fa-envelope"></i>info@yugaljee.com</li>
                               
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_opening">
                        <h3 class="widget-title">Opening Hours</h3>
                        <ul>
                            <li><span>Monday - Friday:</span><span class="time">8:30am - 6:30pm</span></li>
                            <li><span>Satarday:</span> <span class="time">    9:30am - 2:30pm</span></li>
                            <li><span>Sunday:</span><span class="closed-tag">We’re Closed:</span></li>
                        </ul>
                        <div class="d-flex gap-1">
                        <a href="javascrupt:void(0)" class="w-50"><img src="{{asset('assets/img/playstore.png')}}" alt=""></a>
                        <a href="javascrupt:void(0)" class="w-50">&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-bottom text-center">
                <div class="row">
                    <div class="col-md-6 align-self-center text-lg-start text-center">
                        <p>Copyright © {{date('Y')}}. All rights reserved. Developed By <a href="http://codinghomies.com/" target="_blank">Coding Homies</a></p>
                    </div>
                    <div class="col-md-6 align-self-center text-md-end text-center">
                        <ul>
                            <li><a href="{{route('frontend.privacy')}}">Privacy Policy</a></li>
                            <li><a href="{{route('frontend.contact')}}">Contact us</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->