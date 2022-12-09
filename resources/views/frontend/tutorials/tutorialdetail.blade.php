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
          <div class="card bg-white border-0 tutorials-card ">
             <div class="card-body pl-2 pt-3">
                  <div class=" pr-0">
                    <img src="http://localhost/questionoverflow/public/images/2123355862.png" class="w-100 ">
                  </div>
                  <div class=" ">
                    <h4 class="heading pt-2 ">
                     <a href="http://localhost/questionoverflow/tutorials/php/chunk-file-upload-with-javascript-using-php" class="text-dark font-weight-bold">Chunk File Upload with JavaScript using PHP
                    </a>
                   </h4>
                   <div class="comments pt-2">
                     <p class="d-inline"><span class="codex">By: Question Overflow </span><b>|</b> <span class="codex"> In: <a href="http://localhost/questionoverflow/tutorials/php" class="link">PHP</a></span> <b>|</b></p>
                     <span class="codex">Last Updated: 2 days ago </span>
                   </div>
                   <div class="mt-2">
                    <p class="detail-content">
                    PHP is an open-source server-side scripting language that many devs use for web development. It is also a general-purpose language that you can use to make lots of projects, including Graphical User Interfaces (GUIs).
                    PHP scripts can only be interpreted on a server that has PHP installed.
                    The client computers accessing the PHP scripts require a web browser only. A PHP file contains PHP tags and ends with the extension “.php”.
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
                  <div class="chunk-file mt-3">
                   <h5 class="font-weight-bold mt-3">How to upload chunk files?</h5>
                   <p class="detail-content mt-2">
                    There are a few ways to deal with large file uploads in PHP. The easiest way is to increase the maximum upload size limit in the PHP configuration file (php.ini) on the server. If you don’t want to modify the server setting in PHP, the Chunk Upload method is one of the best alternatives for large file upload with PHP. In chunk upload, the large file is split into small parts and uploaded in chunks. You can upload large files above 500MB or GB to the server using PHP. This tutorial will show you how to handle large file upload with the chunking feature in PHP.<br>
                    Normally, the entire file is posted to the server-side for upload. But, if the file is huge (about several gigabytes) in size, the standard upload may fail due to settings in the server’s constraints on uploaded file size. To overcome this issue, we can integrate the chunk upload functionality. The chunk file upload method slices the file into chunks and sends them one by one to the server in PHP.<br>
                    We will use the Plupload library to split file into chunks on the client-side and post them to the server-side using JavaScript. Plupload is a JavaScript library that handles the chunk upload process on the client-side.
                  </p>
                  </div>
                  <div class="server-side mt-3">
                  <h5 class="font-weight-bold mt-3">Server-side Upload Handler with PHP</h5>
                  <div class=" scrollbar  pl-5 py-4 mt-2" id="style-2">
                  <div class="force-overflow">
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
                  </div>
                   </div>
                <div class="row">
                 <div class="col-md-12 comments pt-4 "> 
                   <h5 class=" font-weight-bold border-bottom pb-1">Comments</h5>
                   <div class="users bg-white d-flex py-3 px-3  mt-3">
                     <div class="mr-4">
                     <img src="public/front/images/Abu-Bakar-Hafeez-Bhatti.jpg" class="rounded-circle ">
                     </div>
                     <div class="users-data  "> 
                      <h6 class="d-inline user-name "> <a href="" class="">Axel Bouaziz</a></h6>
                      <span class="codex font-weight-bold ml-2"> 08 December,2022 </span>
                      <p class=" detail-content py-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                      <a href="" class=" text-primary font-weight-bold replay"> Reply</a>
                     </div>
                   </div>
                   <div class="users bg-white d-flex py-3 px-3  mt-3">
                     <div class="mr-4">
                     <img src="public/front/images/Abu-Bakar-Hafeez-Bhatti.jpg" class="rounded-circle ">
                     </div>
                     <div class="users-data  "> 
                      <h6 class="d-inline user-name "> <a href="" class="">Axel Bouaziz</a></h6>
                      <span class="codex font-weight-bold ml-2"> 08 December,2022 </span>
                      <p class=" detail-content py-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                      <a href="" class=" text-primary font-weight-bold replay"> Reply</a>
                     </div>
                   </div>
                   <div class="users bg-white d-flex py-3 px-3  mt-3">
                     <div class="mr-4">
                     <img src="public/front/images/Abu-Bakar-Hafeez-Bhatti.jpg" class="rounded-circle ">
                     </div>
                     <div class="users-data  "> 
                      <h6 class="d-inline user-name "> <a href="" class="">Axel Bouaziz</a></h6>
                      <span class="codex font-weight-bold ml-2"> 08 December,2022 </span>
                      <p class=" detail-content py-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                      <a href="" class=" text-primary font-weight-bold replay"> Reply</a>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="leave-comment col-md-12 mt-5 px-0 ">
                  <h5 class=" font-weight-bold border-bottom pb-1">Leave A Comment</h5>  
                  <form action="" class="bg-white py-4">
                  <div class="row">
                 <div class="col-md-6">
                   <div class="form-group">
                    <label class="">Name</label>
                    <input type="text" name="name" class="form-control rounded-0 w-100" required="required ">
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email" class="form-control rounded-0 w-100" required=" required">
                   </div>
                 </div>
                 <div class="col-md-12">
                   <div class="form-group">
                     <label>Your Comment</label>
                     <textarea name="comment" id="comment" required="required" class="form-control rounded-0" rows="8"></textarea>
                   </div>
                    <div class="text-center">
                     <button type="submit" class="btn  px-5 text-uppercase font-weight-bold rounded-0">Send </button>
                    </div>
               </div>
            </div>
        </form>
      </div>
                </div>
             </div>
          </div>
    	</div>
    		<div class="col-md-3 ">
                @include('frontend.tutorials.sidebaroftutorialpages')
            </div>
    </div>
</div>
</section>
@endsection