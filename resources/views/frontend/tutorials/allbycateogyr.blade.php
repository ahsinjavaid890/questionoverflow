@extends('frontend.layouts.app')
@section('title')
<title>{{ $category->metta_tittle }}</title>
<meta name="DC.Title" content="{{ $category->metta_tittle }}">
<meta name="rating" content="general">
<meta name="description" content="{{ $category->metta_description }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ url('public/images') }}/{{ $category->image }}">
<meta property="og:title" content="All Tutorials">
<meta property="og:description" content="{{ $category->metta_description }}">
<meta property="og:site_name" content="Question Overflow">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:locale" content="it_IT">
<link rel="canonical" href="{{ Request::url() }}/" />
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
            <h2 class="section-title pb-3">All {{ $category->name }} Tutorials</h2>
            <div class="searchinputfortemplate">
                <input type="text" placeholder="Search All {{ $category->name }} Tutorials..." class="form-control" name="">
            </div>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section>
<div class="container-fluid">
<div class="row tutorials py-5 ">
  <div class="col-md-9  ">
      <div class="row">
        @foreach($data as $r)
             @include('frontend.tutorials.showtutorialinforeach')
        @endforeach
      </div>
      <div class="row">
          {!! $data->links('frontend.pagination.index') !!}
      </div>
  </div>
    <!-- //// col 3 //// -->
    <div class="col-md-3 pt-3">
    @include('frontend.tutorials.sidebaroftutorialpages')
  </div>
</div>
</div>
@endsection
