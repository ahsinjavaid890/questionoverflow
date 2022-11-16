@extends('frontend.layouts.app')
@section('title')
<title>{{ $data->metta_tittle }}</title>
<meta name="DC.Title" content="{{ $data->metta_tittle }}">
<meta name="rating" content="general">
<meta name="description" content="{{ $data->metta_description }}">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="{{ $data->metta_tittle }}">
<meta property="og:description" content="{{ $data->metta_description }}">
<meta property="og:site_name" content="Question Overflow">
<meta property="og:url" content="{{ url('') }}">
<meta property="og:locale" content="it_IT">
@endsection
@section('content')
<section class="hero-area bg-white shadow-sm pt-60px pb-60px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content">
            <div class="d-flex align-items-center pb-3">
                <div class="icon-element shadow-sm flex-shrink-0 mr-3 border border-gray">
                    <img src="{{ url('public/front/images/cart.svg') }}">
                </div>
                <h2 class="section-title fs-30">{{ $data->name }}</h2>
            </div>
            <p class="section-desc pb-3">{{ $data->description }}</p>
            <p class="section-desc text-black">{{ $templates->count() }} Templates</p>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section>
<section class="blog-area pt-80px pb-80px">
    <div class="container">
        <div class="row">
        	@foreach($templates as $r)
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-y">
                    <a href="{{ url('templates') }}/{{ $data->url }}/{{ $r->url }}" class="card-img">
                        <img class="lazy" src="{{ url('public/images') }}/{{ $r->image }}" data-src="{{ url('public/images') }}/{{ $r->image }}" alt="{{ $r->name }}">
                    </a>
                    <div class="card-body pt-0">
                        <a href="javascript:void(0)" class="card-link">0 Downloads</a>
                        <h5 class="card-title fw-medium"><a href="{{ url('templates') }}/{{ $data->url }}/{{ $r->url }}">{{ $r->name }}</a></h5>
                        <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                            <div class="media-body">
                                <small class="meta d-block lh-20">
                                    <span>Last Updated {{ Cmf::create_time_ago($r->updated_at) }}</span>
                                </small>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
@endsection