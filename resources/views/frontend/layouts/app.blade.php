<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('public/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/css/selectize.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/css/jquery-te-1.4.0.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/css/upvotejs.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/css/jquery.fancybox.min.css') }}">
    <!-- end inject -->
</head>
    <body>
    <!-- start cssload-loader -->
    <div id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
        </div>
    </div>
        @include('frontend.includes.navbar')
            @yield('content')
          
        @include('frontend.includes.footer')
        <div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
            <i class="la la-arrow-up"></i>
        </div>
       
        <script src="{{ url('public/front/js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ url('public/front/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ url('public/front/js/owl.carousel.min.js') }}"></script>
        <script src="{{ url('public/front/js/selectize.min.js') }}"></script>
        <script src="{{ url('public/front/js/main.js') }}"></script>
        <script src="{{ url('public/front/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ url('public/front/js/jquery.lazy.min.js') }}"></script>
        <script src="{{ url('public/front/js/jquery-te-1.4.0.min.js') }}"></script>
        <script src="{{ url('public/front/js/upvote.vanilla.js') }}"></script>
        <script src="{{ url('public/front/js/upvote-script.js') }}"></script>
        <script src="{{ url('public/front/js/jquery.multi-file.min.js') }}"></script>
        @include('frontend.includes.authenticationmodal')
    </body>
</html>