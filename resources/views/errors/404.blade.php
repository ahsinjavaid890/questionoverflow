@extends('frontend.layouts.app')
@section('title')
<title>Question Overflow</title>
<meta name="DC.Title" content="Question Overflow">
<meta name="rating" content="general">
<meta name="description" content="Question Overflow is the Bigest, most trusted online community for developers to learn, share their programming knowledge, and build their careers.">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="Question Overflow">
<meta property="og:description" content="Question Overflow is the Bigest, most trusted online community for developers to learn, share their programming knowledge, and build their careers.">
<meta property="og:site_name" content="Question Overflow">
<meta property="og:url" content="{{ url('') }}">
<meta property="og:locale" content="it_IT">
@endsection
@section('content')
<section class="error-area section-padding position-relative">
    <span class="icon-shape icon-shape-1"></span>
    <span class="icon-shape icon-shape-2"></span>
    <span class="icon-shape icon-shape-3"></span>
    <span class="icon-shape icon-shape-4"></span>
    <span class="icon-shape icon-shape-5"></span>
    <span class="icon-shape icon-shape-6"></span>
    <span class="icon-shape icon-shape-7"></span>
    <div class="container">
        <div class="text-center">
            <img src="{{ url('front/images/error-img.png') }}" alt="error-image" class="img-fluid mb-40px">
            <h2 class="section-title pb-3">Oops! Page not found!</h2>
            <p class="section-desc pb-4">We're sorry, we couldn't find the page you requested.</p>
            <a class="btn theme-btn" href="{{ url('') }}"> Go to homepage </a>
        </div>
    </div><!-- end container -->
</section>
@endsection
