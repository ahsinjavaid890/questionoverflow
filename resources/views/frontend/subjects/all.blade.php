@extends('frontend.layouts.app')
@section('title')
<title>All Subjects</title>
<meta name="DC.Title" content="All Subjects">
<meta name="rating" content="general">
<meta name="description" content="Question Overflow is the Bigest, most trusted online community for developers to learn, share their programming knowledge, and build their careers.">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="All Subjects">
<meta property="og:description" content="Question Overflow is the Bigest, most trusted online community for developers to learn, share their programming knowledge, and build their careers.">
<meta property="og:site_name" content="Question Overflow">
<meta property="og:url" content="{{ url('') }}">
<meta property="og:locale" content="it_IT">
@endsection
@section('content')
<section class="question-area pt-40px pb-40px">
    <div class="container">
        <div class="filters pb-3">
            <div class="d-flex flex-wrap align-items-center justify-content-between pb-4">
                <div class="pr-3">
                    <h3 class="fs-22 fw-medium">All Subjects</h3>
                    <p class="fs-15 lh-22 my-2">A tag is a keyword or label that categorizes your question with other, similar questions.
                        <br> Using the right tags makes it easier for others to find and answer your question.</p>
                </div>
                @if(Auth::check())
                	<a href="{{ url('ask') }}" class="btn theme-btn theme-btn-sm">Ask Question</a>
                @else
                	<a data-toggle="modal" data-target="#loginModal" href="javascript::void()" class="btn theme-btn theme-btn-sm">Login to ask Question</a>
                @endif
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <form method="post" class="mr-3 w-25">
                    <div class="form-group">
                        <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="search" placeholder="Filter by Subject Name">
                        <button class="form-btn" type="button"><i class="la la-search"></i></button>
                    </div>
                </form>
                <div class="btn-group btn--group mb-3" role="group" aria-label="Filter button group">
                    <a href="#" class="btn active">All</a>
                    <a href="#" class="btn">Popular</a>
                    <a href="#" class="btn">Name</a>
                    <a href="#" class="btn">New</a>
                </div>
            </div>
        </div><!-- end filters -->
        <div class="row">
        	@foreach($data as $r)
            <div class="col-lg-3 responsive-column-half">
                <div class="card card-item">
                    <div class="card-body">
                        <div class="tags pb-1">
                            <a href="#" class="tag-link tag-link-md tag-link-blue">{{ $r->name }}</a>
                        </div>
                        <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                            {{ $r->description }}
                        </p>
                        <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                            <p class="pr-1 lh-18">{{ DB::table('answerquestions')->where('question_subject' , $r->name)->count() }} questions</p>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            @endforeach
        </div><!-- end row -->
        <div class="row" id="pagination" style="margin-top: 50px;">
            {!! $data->links('frontend.pagination.index') !!}
        </div>
    </div><!-- end container -->
</section>
@endsection