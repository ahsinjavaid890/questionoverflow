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
    <div class="row ">
    	<div class="col-md-9 pb-3">
          <div class="card bg-white border-0  ">
             <div class="card-body p-0">
                  <div class=" ">
                    <img src="{{ url('public/images') }}/{{ $data->image }}" class="w-100 ">
                  </div>
                  <div class=" ">
                    <h4 class="heading pt-2 font-weight-bold ">
                    {{ $data->name }}
                   </h4>
                   <div class="comments pt-2">
                     <p class="d-inline"><span class="codex">By: Question Overflow </span><b>|</b> <span class="codex"> In: <a href="http://localhost/questionoverflow/tutorials/php" class="link">PHP</a></span> <b>|</b></p>
                     <span class="codex">Last Updated: {{ Cmf::create_time_ago($data->created_at) }} </span>
                   </div>
                   <div class="mt-2">
                    <p class="detail-content">
                      {!! $data->description !!}
                    </p>
                   </div>
                   <div class=" pt-2">
                    <h5 class="font-weight-bold"> PHP Syntax:</h5>
                    <div class="mt-2 php-syntax  pl-5 py-4">
                     <p class="font-weight-bold" >
                     <span class="d-block">&lt;<span>!DOCTYPE html</span>&gt;</span>
                     <span class="d-block">&lt;<span>html</span>&gt;</span>
                     <span class="d-block pl-3">&lt;<span>head</span>&gt;</span>
                     <span class="d-block pl-4"><span>&lt;<span>title</span>&gt;</span> Php Syntax <span>&lt;<span>title</span>&gt;</span></span>
                     <span class="d-block pl-3">&lt;<span>head</span>&gt;</span>
                     <span class="d-block pl-1">&lt;<span>body</span>&gt;</span>
                     <span class="d-block pl-4 text-primary">&lt;<span>?</span>php</span>
                     <span class="d-block pl-5 text-primary"> echo "Hi, I'm a PHP script!";</span>
                     <span class="d-block pl-4 text-primary"><span>?</span>&gt;</span>
                     <span class="d-block pl-1">&lt;<span>body</span>&gt;</span>
                     <span class="d-block">&lt;<span>html</span>&gt;</span>
                    </p>
                    </div>
                   </div>
                   <div class="why-use mt-3">
                    <h5 class="font-weight-bold"> Why PHP Is Still So Important For Web Development?</h5>
                    <p class="detail-content mt-2">
                     The language is still relevant and popular for web development, as it's easy, fast, constantly updated and there is a wide market of specialists who can work with it, here are some key PHP benefits that help explain why it is still so important in web development.
                    </p>
                    <h5 class="font-weight-bold mt-3">Benefits</h5>
                    <div class="benefits mt-3">
                    <p class="detail-content">
                     <span class="font-weight-bold benefit text-dark">It’s easy to learn and use: </span>One of the main reasons PHP became so commonplace is that it is relatively simple to get started with. Even without extensive knowledge or experience in web development, most people could create a web page with a single PHP file in a relatively short period of time. The syntax is simple and command functions are easy to learn, meaning the barriers to entry with PHP are lower than with many other languages.
                    </p>
                    <p class="detail-content mt-3 ">
                     <span class="font-weight-bold benefit text-dark">It’s open source: </span>One of the main reasons PHP became so commonplace is that it is relatively simple to get started with. Even without extensive knowledge or experience in web development, most people could create a web page with a single PHP file in a relatively short period of time. The syntax is simple and command functions are easy to learn, meaning the barriers to entry with PHP are lower than with many other languages.
                    </p>
                    <p class="detail-content mt-3">
                     <span class="font-weight-bold benefit text-dark">Server-Side: </span>PHP is a server-side scripting language processed by a PHP interpreter on a web server; the result (the output) is sent to the web browser as plain HTML..
                    </p>
                    <p class="detail-content mt-3">
                     <span class="font-weight-bold benefit text-dark">Object-Oriented: </span>Object-Oriented Programming (OOP) leverages the concept of “objects” to contain data and functions to help build more complex, reusable web applications. OOP was added to PHP5.
                    </p>
                    <p class="detail-content mt-3">
                     <span class="font-weight-bold benefit text-dark">Fast: </span> PHP uses its memory, minimizing server workload and increasing performance. PHP can be up to 382% faster than Python and 195% faster than Ruby
                    </p>
                    <p class="detail-content mt-3">
                     <span class="font-weight-bold benefit text-dark">Simple: </span>The PHP syntax is easily understood and learned, whether you’re building from scratch or leveraging existing frameworks or add-ons.
                    </p>
                    </div>
                  <!-- <div class="chunk-file mt-3">
                   <h5 class="font-weight-bold mt-3">How to upload chunk files?</h5>
                   <p class="detail-content mt-2">
                    There are a few ways to deal with large file uploads in PHP. The easiest way is to increase the maximum upload size limit in the PHP configuration file (php.ini) on the server. If you don’t want to modify the server setting in PHP, the Chunk Upload method is one of the best alternatives for large file upload with PHP. In chunk upload, the large file is split into small parts and uploaded in chunks. You can upload large files above 500MB or GB to the server using PHP. This tutorial will show you how to handle large file upload with the chunking feature in PHP.<br>
                    Normally, the entire file is posted to the server-side for upload. But, if the file is huge (about several gigabytes) in size, the standard upload may fail due to settings in the server’s constraints on uploaded file size. To overcome this issue, we can integrate the chunk upload functionality. The chunk file upload method slices the file into chunks and sends them one by one to the server in PHP.<br>
                    We will use the Plupload library to split file into chunks on the client-side and post them to the server-side using JavaScript. Plupload is a JavaScript library that handles the chunk upload process on the client-side.
                  </p>
                  </div> -->
                   </div>
                </div>
             </div>
          </div>
          <div class="server-side mt-3">
                  <h5 class="font-weight-bold  border py-2 pl-2 bg-primary text-white">Upload Handler with HTML</h5>
                  <div class=" scrollbar border" id="style-2">
                  <div class="force-overflow">
                  <div class="scroll">
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                  </div>
                  </div>
                  </div>
                  </div> 
             <div class="server-side mt-5">
                  <h5 class="font-weight-bold  border py-2 pl-2 bg-primary text-white">Server-side Upload Handler with PHP</h5>
                  <div class=" scrollbar border" id="style-2">
                  <div class="force-overflow">
                  <div class="scroll">
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                   <p class="count "></p>
                  </div>
                  </div>
                  </div>
                  </div>   
          <h4 class="heading mt-4 font-weight-bold border-bottom">Comments</h4>
          <div class="card border-0 bg-white mt-3 tutorials-card">
          <div class="card-body">
          <div class="d-flex flex-start align-items-center">
             <img src="{{ url('public//front/images/author1.png') }}" class="rounded-circle ">
              <div class="ml-2">
                <h6 class="font-weight-bold">Lily Coleman</h6>
                <p class="">
                  Dec 09,2022
                </p>
              </div>
            </div>
            <p class="detail-content pl-1 my-2">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
            </p>
            <div class="small d-flex justify-content-end">
              <a href="#" class="d-flex align-items-center ml-4 font-weight-bold">
                <i class="la la-share mr-1 "></i>
                <p class="mb-0">Reply</p>
              </a>
            </div>
          </div>   
          </div>
          <div class="card border-0 bg-white mt-3 tutorials-card">
          <div class="card-body">
          <div class="d-flex flex-start align-items-center">
             <img src="{{ url('public//front/images/author1.png') }}" class="rounded-circle ">
              <div class="ml-2">
                <h6 class="font-weight-bold">Lily Coleman</h6>
                <p class="">
                  Dec 09,2022
                </p>
              </div>
            </div>
            <p class="detail-content pl-1 my-2">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
            </p>
            <div class="small d-flex justify-content-end">
              <a href="#" class="d-flex align-items-center ml-4 font-weight-bold">
                <i class="la la-share mr-1 "></i>
                <p class="mb-0">Reply</p>
              </a>
            </div>
          </div>   
          </div>
          <div class="card border-0 bg-white mt-3 tutorials-card">
          <div class="card-body">
          <div class="d-flex flex-start align-items-center">
             <img src="{{ url('public//front/images/author1.png') }}" class="rounded-circle ">
              <div class="ml-2">
                <h6 class="font-weight-bold">Lily Coleman</h6>
                <p class="">
                  Dec 09,2022
                </p>
              </div>
            </div>
            <p class="detail-content pl-1 my-2">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
            </p>
            <div class="small d-flex justify-content-end">
              <a href="#" class="d-flex align-items-center ml-4 font-weight-bold">
                <i class="la la-share mr-1 "></i>
                <p class="mb-0">Reply</p>
              </a>
            </div>
          </div>   
          </div>
          <h4 class="heading mt-4 font-weight-bold border-bottom ">Leave a comment</h4>
          <form class=" mt-4 py-2 post-comment ">
          <div class="row">
          <div class="col-md-6">
          <div class="input-group mb-3">
              <input type="text" class="form-control border rounded-0 bg-light" placeholder="Username" id="usr" name="username">
            </div>
          </div>
          <div class="col-md-6">
          <div class="input-group mb-3">
              <input type="text" class="form-control border rounded-0 bg-light" placeholder="email" id="usr" name="email">
            </div>
          </div>   
          <div class="col-md-12">
           <div class="form-group">
           <textarea class="form-control rounded-0 bg-light " id="exampleFormControlTextarea1" rows="10" placeholder="write your comment"></textarea>
           </div>
          </div>
          </div>
          <div class="text-center">
          <button class="btn btn-primary rounded-0 font-weight-bold">Post your comment</button>
          </div>
          </form>
    	</div>
    		<div class="col-md-3 ">
                @include('frontend.tutorials.sidebaroftutorialpages')
            </div>
    </div>
</div>
</section>
@endsection