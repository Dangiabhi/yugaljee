<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel=icon href="{{asset('assets/img/favicon.jpg')}}" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/remixicon/remixicon.css')}}">

</head>
<body>

@session('status')
<label for="notify-1">
        <input id="notify-1" type="checkbox">
        <div id="notification-bar">
            <div class="container">
            <i class="fa fa-times-circle"></i>
            <p>{{ session('status') }}</p>
            <a class="btn-action" href="#">SIGN UP <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
</label>
@endsession   

@include('frontend.layout.header')

<section id="container" class=""> 
    @yield('content')
</section>

@include('frontend.layout.footer')

    <!-- all plugins here -->
    <script src="{{asset('assets/js/vendor.js')}}"></script>
    <!-- main js  -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    @stack('custom-scripts')
</body>


</html>