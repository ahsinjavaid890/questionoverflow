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

    <!--======================================
        START HERO AREA
======================================-->
    <section class="hero-area pt-80px pb-80px hero-bg-1">
        <div class="overlay"></div>
        <span class="stroke-shape stroke-shape-1"></span>
        <span class="stroke-shape stroke-shape-2"></span>
        <span class="stroke-shape stroke-shape-3"></span>
        <span class="stroke-shape stroke-shape-4"></span>
        <span class="stroke-shape stroke-shape-5"></span>
        <span class="stroke-shape stroke-shape-6"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="hero-content">
                        <h2 class="section-title pb-3 text-white">Share & grow knowledge with us!</h2>
                        <p class="section-desc text-white">If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            <br> isn't anything embarrassing hidden in the middle of text.
                        </p>
                        <div class="hero-btn-box py-4">
                            <a href="{{ url('ask') }}" class="btn theme-btn theme-btn-white">Ask a Question <i class="la la-arrow-right icon ml-1"></i></a>
                        </div>
                    </div>
                    <!-- end hero-content -->
                </div>
                <!-- end col-lg-9 -->
                <div class="col-lg-3">
                    <div class="hero-list hero-list-bg">
                        <div class="d-flex align-items-center pb-30px">
                            <img src="{{ url('front/images/anonymousHeroQuestions.svg') }}" alt="question icon" class="mr-3">
                            <p class="fs-15 text-white lh-20">Anybody can ask a question</p>
                        </div>
                        <div class="d-flex align-items-center pb-30px">
                            <img src="{{ url('front/images/anonymousHeroAnswers.svg') }}" alt="question answer icon" class="mr-3">
                            <p class="fs-15 text-white lh-20">Anybody can answer</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <img src="{{ url('front/images/anonymousHeroUpvote.svg') }}" alt="vote icon" class="mr-3">
                            <p class="fs-15 text-white lh-20">The best answers are voted up and rise to the top</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!--======================================
        END HERO AREA
======================================-->

    <!-- ================================
         START QUESTION AREA
================================= -->
    <section class="question-area pt-80px pb-40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="sidebar pb-45px position-sticky top-0 mt-2">
                        <ul class="generic-list-item generic-list-item-highlight fs-15">

                            <li class="lh-26 active"><a href="home-2.html"><i class="la la-home mr-1 text-black"></i> Home</a></li>
                            @foreach($categories as $r)
                            <li class="lh-26"><a href="{{ url('subject') }}/{{ $r->url }}"><i class="la la-{{ $r->icon }} mr-1 text-black"></i>{{ $r->name }}</a></li>
                            @endforeach
                            <li class="lh-26"><a href="{{ url('allsubjects') }}"><i class="la la-file-text mr-1 text-black"></i> All Subjects</a></li>
                        </ul>
                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-2 -->
                <div class="col-lg-7">
                    <div class="question-tabs mb-50px">
                        <div class="tab-content" id="myTabContent">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium">All Questions</h3>
                                <div class="filter-option-box w-20">
                                    <select class="select-container">
                                    <option value="newest" selected="selected">Newest </option>
                                    <option value="featured">Bountied (390)</option>
                                    <option value="frequent">Frequent </option>
                                    <option value="votes">Votes </option>
                                    <option value="active">Active </option>
                                    <option value="unanswered">Unanswered </option>
                                    <option value="Votes">Votes </option>
                                </select>
                                </div>
                                <!-- end filter-option-box -->
                            </div>
                            <!-- end filters -->
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    @foreach($questions as $r)
                                        @include('frontend.show.question')
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-7 -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="fs-17 pb-3">Number Achievement</h3>
                                <div class="divider"><span></span></div>
                                <div class="row no-gutters text-center">
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color">980k</span>
                                            <p class="fs-14">Questions</p>
                                        </div>
                                        <!-- end icon-box -->
                                    </div>
                                    <!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color-2">610k</span>
                                            <p class="fs-14">Answers</p>
                                        </div>
                                        <!-- end icon-box -->
                                    </div>
                                    <!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color-3">650k</span>
                                            <p class="fs-14">Answer accepted</p>
                                        </div>
                                        <!-- end icon-box -->
                                    </div>
                                    <!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color-4">320k</span>
                                            <p class="fs-14">Users</p>
                                        </div>
                                        <!-- end icon-box -->
                                    </div>
                                    <!-- end col-lg-6 -->
                                    <div class="col-lg-12 pt-3">
                                        <p class="fs-14">To get answer of question <a href="signup.html" class="text-color hover-underline">Join<i class="la la-arrow-right ml-1"></i></a></p>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="fs-17 pb-3">Related Questions</h3>
                                <div class="divider"><span></span></div>
                                <div class="sidebar-questions pt-3">
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Using web3 to call precompile contract</a></h5>
                                            <small class="meta">
                                            <span class="pr-1">2 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Sudhir Kumbhare</a>
                                        </small>
                                        </div>
                                    </div>
                                    <!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Is it true while finding Time Complexity of the algorithm [closed]</a></h5>
                                            <small class="meta">
                                            <span class="pr-1">48 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">wimax</a>
                                        </small>
                                        </div>
                                    </div>
                                    <!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">image picker and store them into firebase with flutter</a></h5>
                                            <small class="meta">
                                            <span class="pr-1">1 hour ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Antonin gavrel</a>
                                        </small>
                                        </div>
                                    </div>
                                    <!-- end media -->
                                </div>
                                <!-- end sidebar-questions -->
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="fs-17 pb-3">Trending Questions</h3>
                                <div class="divider"><span></span></div>
                                <div class="sidebar-questions pt-3">
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">How did chickenpox get its name?</a></h5>
                                            <small class="meta">
                                            <span class="pr-1">2 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Sudhir Kumbhare</a>
                                        </small>
                                        </div>
                                    </div>
                                    <!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">How can you cut an onion without crying?</a></h5>
                                            <small class="meta">
                                            <span class="pr-1">48 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">wimax</a>
                                        </small>
                                        </div>
                                    </div>
                                    <!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Does flu vaccine protect against Coronavirus?</a></h5>
                                            <small class="meta">
                                            <span class="pr-1">1 hour ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Antonin gavrel</a>
                                        </small>
                                        </div>
                                    </div>
                                    <!-- end media -->
                                </div>
                                <!-- end sidebar-questions -->
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="fs-17 pb-3">Trending Tags</h3>
                                <div class="divider"><span></span></div>
                                <div class="tags pt-4">
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">analytics</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                        <span>32924</span>
                                        </span>
                                    </div>
                                    <!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">computer</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                        <span>32924</span>
                                        </span>
                                    </div>
                                    <!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">python</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                        <span>32924</span>
                                        </span>
                                    </div>
                                    <!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">javascript</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                        <span>32924</span>
                                        </span>
                                    </div>
                                    <!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">c#</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                        <span>32924</span>
                                        </span>
                                    </div>
                                    <!-- end tag-item -->
                                    <div class="collapse" id="showMoreTags">
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">java</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                            <span>32924</span>
                                            </span>
                                        </div>
                                        <!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">swift</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                            <span>32924</span>
                                            </span>
                                        </div>
                                        <!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">html</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                            <span>32924</span>
                                            </span>
                                        </div>
                                        <!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">angular</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                            <span>32924</span>
                                            </span>
                                        </div>
                                        <!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">flutter</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                            <span>32924</span>
                                            </span>
                                        </div>
                                        <!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">machine-language</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                            <span>32924</span>
                                            </span>
                                        </div>
                                        <!-- end tag-item -->
                                    </div>
                                    <!-- end collapse -->
                                    <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags" role="button" aria-expanded="false" aria-controls="showMoreTags">
                                    <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                    <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                </a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="ad-card">
                            <h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
                            <div class="ad-banner mb-4 mx-auto">
                                <span class="ad-text">290x500</span>
                            </div>
                        </div>
                        <!-- end ad-card -->
                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end question-area -->
    <!-- ================================
         END QUESTION AREA
================================= -->

<section class="get-started-area pt-80px pb-50px pattern-bg bg-gray">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Question Overflow communities are different. <br> Here's how</h2>
        </div>
        <div class="row pt-50px">
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-y text-center">
                    <div class="card-body">
                        <img src="{{ url('front/images/bubble.png') }}" alt="bubble">
                        <h5 class="card-title pt-4 pb-2">Expert communities.</h5>
                        <p class="card-text">This is just a simple text made for this unique and awesome template, you can easily edit it as you want.</p>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-y text-center">
                    <div class="card-body">
                        <img src="{{ url('front/images/vote.png') }}" alt="vote">
                        <h5 class="card-title pt-4 pb-2">The right answer. Right on top.</h5>
                        <p class="card-text">This is just a simple text made for this unique and awesome template, you can easily edit it as you want.</p>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-y text-center">
                    <div class="card-body">
                        <img src="{{ url('front/images/check.png') }}" alt="check">
                        <h5 class="card-title pt-4 pb-2">Share knowledge. Earn trust.</h5>
                        <p class="card-text">This is just a simple text made for this unique and awesome template, you can easily edit it as you want.</p>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
@endsection