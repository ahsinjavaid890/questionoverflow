@extends('frontend.layouts.app')
@section('title')
<title>Download Free Themes Website Templates from Question Overflow</title>
<meta name="DC.Title" content="Download Free Themes Website Templates from Question Overflow">
<meta name="rating" content="general">
<meta name="description" content="Get Free Themes for your Dreem Website Blogs Website , News Website , Ecommerece Website">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="Download Free Themes Website Templates from Question Overflow">
<meta property="og:description" content="Get Free Themes for your Dreem Website Blogs Website , News Website , Ecommerece Website">
<meta property="og:site_name" content="Question Overflow">
<meta property="og:url" content="{{ url('') }}">
<meta property="og:locale" content="it_IT">
@endsection
@section('content')
<section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-50px pb-50px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content text-center">
            <h2 class="section-title pb-3">Free WordPress Themes & Website <br> Templates for any project</h2>
            <div class="searchinputfortemplate">
                <input type="text" placeholder="Search Free Themes..." class="form-control" name="">
            </div>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<section class="blog-area pt-80px pb-80px">
    <div class="container">
        <div class="row">
            @for ($i=0; $i < 6; $i++)
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-y">
                    <a href="javascript:void(0)" class="card-img">
                        <img class="lazy" src="https://www.cloudways.com/blog/wp-content/uploads/Ecommerce-Shopping-Infographics.png" data-src="https://www.cloudways.com/blog/wp-content/uploads/Ecommerce-Shopping-Infographics.png" alt="Card image">
                    </a>
                    <div class="card-body pt-0">
                        <a href="javascript:void(0)" class="card-link">14 Templates</a>
                        <h2 class="templateheading"><a href="javascript:void(0)">Ecommerece</a></h2>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            @endfor
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
@endsection