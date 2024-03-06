@section('title',$service->meta_title)
@extends('frontend.layout.index')
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/other/bredcrumb-bg.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0">
                    <h2 class="page-title">{{$service->name}}</h2>
                    <ul class="page-list">
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li><a href="{{route('frontend.service')}}">Service</a></li>
                        <li><a style="color:#2989cc;" href="{{route('frontend.service')}}">{{$service->name}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    
    <!-- service start -->
    <div class="service-area pd-top-115 pd-bottom-120"> 
        <div class="container">
            <div class="row align-item-start">
               
                <div class="col-lg-9 ">
                    <div class="service-item ms-4">
                        @foreach($plans as $plan)
                        <div class="row plans-list">
                            <div class="col-md-2"> 
                            <img src="{{asset($plan->img)}}" alt="">    
                            </div>                            
                            <div class="col-md-10"> 
                                <h2>{{$plan->name}}</h2>
                                {!! $plan->disp !!}

                                <span class="price">Rs {{$plan->price}}</span>
                                <span class="r_price">₹ {{$plan->r_price}}</span>
                            </div>                            
                           
                               <button class="add-cart btn">Add To Cart</button>
                               <button class="btn-label">{{$plan->label}}</button>
                               <button class="btn-time">{{$plan->time}}</button>

                                                      
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach($serviceall as $allserve)
                        <a class="nav-link @if($service->name == $allserve->name) active @endif " href="{{route('frontend.service-detail',$allserve->slug)}}"><img src="{{asset($allserve->icon)}}" alt="img"> {{$allserve->name}}</a>
                    @endforeach
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- service end -->

    <div class="pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center g-0">
                
                @foreach($serviceall as $serviceall)
            
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-two border-right border-bottom text-center">
                        <div class="bg-img"><img src="{{asset($serviceall->image)}}" alt="img"></div>
                        <div class="details">
                            <div class="thumb">
                                <img src="{{asset($serviceall->icon)}}" alt="img">
                            </div>
                            <h3><a href="{{ route('frontend.service-detail', ['slug' => $serviceall->slug]) }}">{{$serviceall->name}}</a></h3>
                            <p>{{$serviceall->disp}}</p>
                            <a class="btn-arrow" href="{{ route('frontend.service-detail', ['slug' => $serviceall->slug]) }}"><i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>    

@endsection