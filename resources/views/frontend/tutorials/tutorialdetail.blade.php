@extends('frontend.layouts.app')
@section('title')
<title>{{ $data->metta_tittle }}</title>
<meta name="DC.Title" content="{{ $data->metta_tittle }}">
<meta name="rating" content="general">
<meta name="description" content="{{ $data->metta_description }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ url('public/images') }}/{{ $data->image }}">
<meta property="og:title" content="All Tutorials">
<meta property="og:description" content="{{ $data->metta_description }}">
<meta property="og:site_name" content="Question Overflow">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:locale" content="it_IT">
<link rel="canonical" href="{{ Request::url() }}/" />
@endsection
@section('content')
<section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-50px pb-50px">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-9">
    			
    		</div>
    		<div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 subscribe py-4">
                        <h6 class="text-white"> Subscribe for your question answer's</h6>
                        <div class="py-2">
                        <input type="email" class="form-control rounded-0" id="" aria-describedby="emailHelp" placeholder="Enter email">
                        <a href="#" class="btn btn-block btn-dark rounded-0 mt-2 text-white font-weight-bold">SUBSCRIBE</a>
                        </div>
                        <div class="social-icon py-2 text-center">
                            <a href="#" class="border   pl-2 pr-1 py-1 mr-1"><i class="la la-facebook mr-1 text-white"></i></a>
                            <a href="#"  class="border pl-2 pr-2 py-1 mr-1"><i class="la la-twitter  text-white"></i></a>
                            <a href="#"  class="border pl-2 pr-2 py-1 mr-1"><i class="la la-linkedin  text-white"></i></a>
                            <a href="#"  class="border pl-2 pr-2 py-1 mr-1"><i class="la la-instagram  text-white"></i></a>
                            <a href="#"  class="border pl-2 pr-2 py-1 mr-1"><i class="la la-whatsapp  text-white"></i></a>
                            <a href="#"  class="border pl-2 pr-2 py-1 "><i class="la la-skype  text-white "></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 py-4 px-0  ">
                        <h5 class="bg-success text-white p-2  text-uppercase mt-1">Our Trending Topics</h5>
                        <div class="d-flex justify-content-between  bg-light">
                          @foreach($categories as $r)
                            <div>
                            <ul class="py-4 px-3 trending">
                                <li class="border-bottom py-2"><a href="{{ url('tutorials') }}/{{$r->url}}">{{ $r->name }}</a></li>
                            </ul>
                            </div>
                          @endforeach
                        </div>
                    </div>
                    <div class="col-md-12    px-0">
                        <h5 class="bg-success text-white p-2  text-uppercase ">Our Trending Tutorials</h5>
                        <ul class="py-4 px-3 trending bg-light">
                            <li class="border-bottom py-2"><a href="#">Lorem ipsum dolor sit amet.</a></li>
                            <li class="border-bottom mt-1 pb-1 py-2"><a href="#" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, blanditiis!</a></li>
                            <li class="border-bottom mt-1 pb-1 py-2"><a href="#" >Lorem ipsum dolor sit amet.</a></li>
                            <li class="border-bottom mt-1 pb-1 py-2"><a href="#">Lorem ipsum dolor sit amet.</a></li>
                            <li class="border-bottom mt-1 pb-1 py-2"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
                            <li class="border-bottom mt-1 pb-1 py-2"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing.</a></li>
                            <li class="border-bottom mt-1 pb-1 py-2"><a href="#">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li class="border-bottom mt-1 pb-1 py-2"><a href="#">Lorem ipsum dolor sit amet.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</section>
@endsection