@section('title','Home')
@extends('frontend.layout.index')
@section('content')


    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/other/bredcrumb-bg.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0">
                    <h2 class="page-title">Contact Us</h2>
                    <ul class="page-list">
                        <li><a href="home.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    
    <!-- contact form area start -->
    <div class="contact-area bg-gray pd-top-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2 class="title">Needs Help? Let's Get In Touch</h2>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                            @if(session('status'))
<p style="font-size:50px; color:red;">{{ session('status') }}</p>
@endif
                    </div>                    
                </div>
            </div>       
        </div>
    </div>
    <!-- contact form area end -->

    <div class="container">
        <div class="contact-inner mg-bottom-120">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-form-inner bg-overlay-2" style="background-image: url(assets/img/other/contact-bg.png);">
                        <div class="section-title mb-4">
                            <h2 class="title text-white">Get In Touch</h2>
                        </div>
                        <div class="media single-contact-info">
                            <div class="media-left thumb">
                                <img src="assets/img/other/location.png" alt="img">
                            </div>
                            <div class="media-body details">
                                <h3>Our Location</h3>
                                <p>Plot No. 04,Dhoom Manikpur,</p>
                                <p>Dadri, Uttar Pradesh 203207</p>
                            </div>
                        </div>
                        <div class="media single-contact-info">
                            <div class="media-left thumb">
                                <img src="assets/img/other/phone.png" alt="img">
                            </div>
                            <div class="media-body details">
                                <h3>Contact Us</h3>
                                <p>+91 7669631030</p>
                                <p>+91 7669631031</p>
                            </div>
                        </div>
                        <div class="media single-contact-info">
                            <div class="media-left thumb">
                                <img src="assets/img/other/envelope.png" alt="img">
                            </div>
                            <div class="media-body details">
                                <h3>Contact Email</h3>
                                <p>info@yugaljee.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form-wrap">                            
                        <form class="pd-top-75" method="post" action="{{route('post.contact')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input-inner">
                                        <input type="text" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input-inner">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>        
                                <div class="col-lg-6">
                                    <div class="single-input-inner">
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input-inner">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-input-inner">
                                        <textarea placeholder="Your Massage" name="message" id="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-base">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>  
    </div>   

    <div class="contact-g-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23574.232766766567!2d77.528334301055!3d28.559831686592624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ced5e27bcda55%3A0xef0844c228773637!2sGoMechanic%20Yugaljee%20Automotive!5e0!3m2!1sen!2sin!4v1707498039807!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
@endsection