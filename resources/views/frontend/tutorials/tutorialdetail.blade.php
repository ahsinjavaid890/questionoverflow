@extends('frontend.layouts.app')
@section('title')
<title>@if($data->metta_tittle){{ $data->metta_tittle }} @else {{ $data->name }} @endif</title>
<meta name="DC.Title" content="@if($data->metta_tittle){{ $data->metta_tittle }} @else {{ $data->name }} @endif">
<meta name="rating" content="general">
<meta name="description" content="{{ $data->metta_description }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ url('public/images') }}/{{ $data->image }}">
<meta property="og:title" content="@if($data->metta_tittle){{ $data->metta_tittle }} @else {{ $data->name }} @endif">
<meta property="og:description" content="{{ $data->metta_description }}">
<meta property="og:site_name" content="Question Overflow">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:locale" content="it_IT">
<link rel="canonical" href="{{ Request::url() }}/" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@endsection
@section('content')
<style type="text/css">
  .why-use ul{
    margin-left: 20px;
  }
</style>
<section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-50px pb-50px">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-9 pb-3 ">
            <div class="card bg-white border-0 ">
               <div class="card-body p-0">
                  <div class="row mr-1 mb-2">
                     <div class="col-md-12">
                        <div class=" ">
                           <img src="{{ url('public/images') }}/{{ $data->image }}" class="w-100 ">
                        </div>
                     </div>
                  </div>
                  <div>
                     <h4 class="heading pt-2 font-weight-bold ">
                        {{ $data->name }}
                     </h4>
                     <div class="comments pt-2">
                        <p class="d-inline"><span class="codex">By: Question Overflow </span><b>|</b> <span class="codex"> In: <a href="http://localhost/questionoverflow/tutorials/php" class="link">PHP</a></span> <b>|</b></p>
                        <span class="codex">Last Updated: {{ Cmf::create_time_ago($data->created_at) }} </span>
                     </div>
                     <div class="mt-2">
                        {!! $data->description !!}
                     </div>
                  </div>
               </div>
            </div>
            <div class="tutorialcontent">
            @foreach(DB::table('tutorial_sections')->where('tutorial_id' , $data->id)->orderby('order' , 'ASC')->get() as $r)
            <div class="server-side mt-3">
               @if($r->heading)
               <div class="why-use mt-3">
                  <h5 class="font-weight-bold">{{$r->heading}}</h5>
               </div>
               @endif
               @if($r->description)
               <div class="why-use mt-3">
                  {!! $r->description !!}
               </div>
               @endif
               @if($r->content)
               <div class="contentheading">
                  <div class="row">
                     <div class="col-md-6">
                        @if($r->content_heading)
                           <h5 class="text-white">{{ $r->content_heading  }}</h5>
                        @endif
                     </div>
                     <div class="col-md-6 text-right text-white">
                          <a class="text-white btn btn-sm btn-primary" href="javascript:void(0)"><i class="la la-clipboard-check"></i> Coppy </a>
                          @if($r->content_file)
                          <a class="text-white btn btn-sm btn-primary" href="javascript:void(0)"><i class="la la-download"></i> Download </a>
                          @endif
                          <a onclick="fullviewbutton({{$r->id}})" id="fullviewbutton{{$r->id}}" class="text-white btn btn-sm btn-primary" href="javascript:void(0)"><i class="la la-street-view"></i> Full View </a>
                     </div>
                  </div>
                  
               </div>
               <div class="contentcode">
                  {!! $r->content !!}
               </div>
               @endif
            </div>
            @endforeach
            </div>
            <div class="downloadbuttons mt-3 d-flex flex-row-reverse">
                  @if($data->demo)
                      <a class="btn theme-btn theme-btn-outline mr-2 p-2" href=""><i class="la la-eye"></i> View Demo</a>
                    @endif
                    @if($data->dounloadlink)
                      <a class="btn theme-btn theme-btn-outline mr-2 p-2" href=""><i class="la la-download"></i> Download Source Code</a>
                    @endif
                    <a class="btn theme-btn theme-btn-outline mr-2 p-2" href="{{ url('needhelp') }}/{{ $data->url }}">Need Help ?</a>

                    <button class="btn facebook-btn theme-btn mr-2 p-2" type="button">
                        <span class="btn-icon"><svg focusable="false" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></span>
                        <span style="padding-left: 44px;" class="flex-grow-1">Share On Facebook</span>
                    </button>

                    <button class="btn twitter-btn theme-btn mr-2 p-2" type="button">
                        <span class="btn-icon"><svg focusable="false" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></span>
                        <span style="padding-left: 44px;" class="flex-grow-1">Share On Twitter</span>
                    </button>
                    <button class="btn instagram-btn theme-btn mr-2 p-2" type="button">
                        <span class="btn-icon"><i class="la la-instagram mr-1"></i></span>
                        <span style="padding-left: 44px;" class="flex-grow-1">Share On Instagram</span>
                    </button>
            </div>
            <div id="comments" class="tutorialcoments">
               @if(DB::table('tutorial_comments')->where('tutorial_id' , $data->id)->orderby('created_at' , 'desc')->count() > 0)
               <h4 class="heading mt-4 font-weight-bold border-bottom">Comments</h4>
               @endif
               @foreach(DB::table('tutorial_comments')->where('tutorial_id' , $data->id)->orderby('created_at' , 'desc')->get() as $r)
               @php
                  $user = DB::table('users')->where('id' , $r->user_id)->first();
               @endphp
               <div class="card border-0 bg-white mt-3 tutorials-card">
                  <div class="card-body">
                     <div class="d-flex flex-start align-items-center">
                        @if($user->profileimage)
                        <img src="{{ url('public/images') }}/{{ $user->profileimage }}" alt="{{ $user->name }}" class="rounded-circle ">
                        @else
                        <img width="40" src="{{ url('public/images/profile-placeholder-question-overflow.png') }}" alt="Question Overflow" class="rounded-circle ">
                        
                        @endif
                        <div class="ml-2">
                           <h6 class="font-weight-bold">{{ $user->name }}</h6>
                           <p class="">
                              {{ Cmf::create_time_ago($r->created_at) }}
                           </p>
                        </div>
                     </div>
                     <p class="detail-content pl-1 my-2">
                        {{ $r->comment }}
                     </p>
                     @if(Auth::check())
                     <div class="small d-flex justify-content-end">
                        <a href="javascript:void(0)" id="reply-btn" class="d-flex align-items-center ml-4 font-weight-bold reply-1">
                           <i class="la la-share mr-1 "></i>
                           <p class="mb-0">Reply</p>
                        </a>
                     </div>
                     <div class="user-reply1 mt-2" id="comment">
                        <div class="form-group">
                           <textarea class="form-control rounded-0 bg-light  " rows="5" placeholder="write your comment"></textarea>
                        </div>
                        <div class="text-right mt-n2">
                           <a href="#" class="btn theme-btn theme-btn-outline">Submit</a>
                        </div>
                     </div>
                     @endif
                  </div>
               </div>
               @endforeach
               
               <h4 class="heading mt-4 font-weight-bold border-bottom ">Leave a comment</h4>
               
               <form method="POST" action="{{ url('tutorials/addcomment') }}" class=" mt-3 py-2 post-comment ">
                  @csrf
                  <input type="hidden" value="{{$data->id}}" name="tutorial_id">
                  @if(Auth::check())
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <textarea name="comment" required class="form-control rounded-0 bg-light " id="exampleFormControlTextarea1" rows="8" placeholder="Write your comment"></textarea>
                        </div>
                     </div>
                  </div>
                  @else
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <textarea style="color:red;" readonly class="form-control rounded-0 bg-light " id="exampleFormControlTextarea1" rows="8" placeholder="write your comment">Please Login For Comment</textarea>
                        </div>
                     </div>
                  </div>
                  @endif
                  <div class="text-center mt-1">
                     @if(Auth::check())
                     <button class="btn theme-btn theme-btn-outline"><i class="la la-sign-in mr-1"></i> Post your comment</button>
                     @else
                     <a href="javascript:void(0)" class="btn theme-btn theme-btn-outline mr-2" data-toggle="modal" data-target="#loginModal"><i class="la la-sign-in mr-1"></i> Post your comment</a>
                     @endif
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-3">
            @if($data->youtubelink)
            <div class="row pr-3 sidebar-tutorial">
               <div class="col-md-12 mb-4 px-0  ">
                 <div class="video-box">
                     <img class="w-100 rounded-rounded lazy" src="{{ url('public/images') }}/{{ $data->image }}" data-src="{{ url('public/images') }}/{{ $data->image }}" alt="video image">
                     <div class="video-content text-center">
                         <a class="icon-element icon-element-lg hover-y mx-auto" href="https://www.youtube.com/watch?v=GlrxcuEDyF8" data-fancybox="" title="Play Video">
                             <i class="la la-youtube mr-1"></i>
                         </a>
                         <p class="mt-2 badge badge-light">Watch Tutorial Video For {{ $data->name }}</p>
                     </div>
                 </div>
               </div>
            </div>
            @endif
            @include('frontend.tutorials.sidebaroftutorialpages')
         </div>
      </div>
   </div>
</section>
<script>
  $(document).ready(function(){
    $(".user-reply1").hide(function(){
      $(".reply-1").click(function(){
        $(".user-reply1").fadeToggle() ;
      });
     
    })
  })
</script>
@endsection