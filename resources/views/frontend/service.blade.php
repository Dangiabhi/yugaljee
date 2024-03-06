@section('title','Our Service')
@extends('frontend.layout.index')
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/other/bredcrumb-bg.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0">
                    <h2 class="page-title">Our Service</h2>
                    <ul class="page-list">
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li><a style="color:#2989cc;" href="{{route('frontend.service')}}">Our Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    
    <!-- service start -->
    <div class="service-area pd-top-115 pd-bottom-120"> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h6 class="sub-title double-line"><span></span>  Best Services</h6>
                        <h2 class="title">Provide our best services</h2>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-0">
                @foreach($serviceall as $serviceall)
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-two border-right border-bottom text-center">
                        <div class="bg-img"><img src="{{asset($serviceall->image)}}" alt="img"></div>
                        <div class="details">
                            <div class="thumb">
                                <img src="{{asset($serviceall->icon)}}" alt="img">
                            </div>
                            <h3><a href="{{route('frontend.service-detail',[$serviceall->slug])}}">{{$serviceall->name}}</a></h3>
                            <p>{{$serviceall->disp}}</p>
                            <a class="btn-arrow" href="{{route('frontend.service-detail',[$serviceall->slug])}}"><i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- service end -->

@endsection