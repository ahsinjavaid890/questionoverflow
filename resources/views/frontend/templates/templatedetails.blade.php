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
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white pt-50px pb-10px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content">
                    <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0">
                        <div class="media-img media--img">
                            <img src="{{ url('public/images') }}/{{ $category->image }}" alt="avatar">
                        </div>
                        <div class="media-body">
                            <h5 class="fs-24">{{ $data->name }}</h5>
                            <p class="pt-2 lh-20">{{ $category->name }}</p>
                        </div>
                    </div><!-- end media -->
                </div><!-- end hero-content -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="hero-btn-box text-right py-3">
                    <button type="button" class="popover-trigger btn border" data-container="body" data-toggle="popover" data-placement="bottom">
                        <svg aria-hidden="true" class="svg-icon-color-gray" width="18" height="18"><path d="M4.5 10a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm5 0a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM13 8.5a1.5 1.5 0 103 0 1.5 1.5 0 00-3 0z"></path></svg>
                    </button>
                    <div class="generic-popover d-none">
                        <ul class="generic-list-item">
                            <li class="lh-18 text-black-50"><a href="#"><i class="la la-envelope mr-1"></i> Share via email</a></li>
                            <li class="lh-18 text-black-50"><a href="#"><i class="la la-twitter mr-1"></i> Share via Twitter</a></li>
                            <li class="lh-18 text-black-50"><a href="#"><i class="la la-facebook mr-1"></i> Share via Facebook</a></li>
                            <li class="lh-18 text-black-50"><a href="#"><i class="la la-instagram mr-1"></i> Share via Instagram</a></li>
                            <li class="lh-18 text-black-50 mb-0"><a href="#" data-toggle="modal" data-target="#reportModal"><i class="la la-flag mr-1"></i> Report</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->
<!-- ================================
         START COMPANY AREA
================================= -->
<section class="company-area pb-90px">
    <div class="bg-white shadow-sm pt-30px pb-30px sticky-navs-wrap">
        <div class="container">
            <ul class="js-scroll-nav">
                <li class="active"><a href="#about-company" class="page-scroll">Details</a></li>
                <li><a href="#tech-stack" class="page-scroll">Reviews</a></li>
                <li><a href="#company-videos" class="page-scroll">Comments</a></li>
                <li><a href="#jobs" class="page-scroll">Support</a></li>
            </ul>
        </div>
    </div><!-- end sticky-navs-wrap -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="company-details-panel-main-bar pt-30px">
                    <div class="company-details-panel mb-30px" id="about-company">
                        <h3 class="fs-20 pb-3">{{ $data->name }}</h3>
                        <img src="{{ url('public/images') }}/{{ $data->image }}" data-src="images/company-cover-img.png" alt="cover image" class="mb-4 w-100 lazy">
                        {!! $data->description !!}
                    </div><!-- end company-details-panel -->
                     <div class="company-details-panel mb-30px" id="tech-stack">
                        <h3 class="fs-20 pb-3">Reviews</h3>
                        
                    </div><!-- end company-details-panel -->
                    <div class="company-details-panel mb-30px" id="company-videos">
                        <h3 class="fs-20 pb-3">Comments</h3>
                        <div class="video-box">
                            
                        </div>
                    </div><!-- end company-details-panel -->
                    <div class="company-details-panel mb-30px" id="jobs">
                        <h3 class="fs-20 pb-3">Support</h3>
                        <div class="jobs-snippet">
                        <form action="{{ url('supporttemplate') }}" class="contact-form card card-item">
                            @csrf
                            <input type="hidden"  name="templateid" value="{{ $data->id }}">
                            <div class="card-body row">
                                <div class="col-lg-12">
                                    <div class="alert alert-success contact-success-message mb-3" role="alert">
                                        Thank You! Your message has been sent.
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-20">Your Name</label>
                                        <input type="text" id="name" name="name" class="form-control form--control fs-14" placeholder="e.g. Alex smith">
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-20">Email</label>
                                        <input type="email" id="email" name="email" class="form-control form--control fs-14" placeholder="e.g. alexsmith@gmail.com"  data-temp-mail-org="0">
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-20">Phone Number</label>
                                        <input type="tel" id="phone-number" name="phone" class="form-control form--control fs-14" placeholder="Your phone number">
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-20">Message</label>
                                        <textarea id="message" name="message" class="form-control form--control fs-14" rows="6" placeholder="Tell us how we can help you."></textarea>
                                    </div><!-- end form-group -->
                                    <div class="form-group mb-0">
                                        <button id="send-message-btn" class="btn theme-btn" type="submit">Send Message</button>
                                    </div><!-- end form-group -->
                                </div><!-- end col-lg-7 -->
                                <!-- end col-lg-5 -->
                            </div><!-- end row -->
                        </form>

                        </div><!-- end jobs-snippet -->
                    </div><!-- end company-details-panel -->
                </div><!-- end company-details-panel-main-bar -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar pt-40px pl-30px">
                    <div class="media media-card">
                        <div class="media-img w-auto h-auto rounded-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46">
                                <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                    <path fill="#c3e5eb" d="M39.8594595,3.56756757 L7.6,3.56756757 C5.38216216,3.56756757 3.58772973,5.38216216 3.58772973,7.6 L3.56756757,43.8918919 L11.6324324,35.827027 L39.8594595,35.827027 C42.0772973,35.827027 43.8918919,34.0124324 43.8918919,31.7945946 L43.8918919,7.6 C43.8918919,5.38216216 42.0772973,3.56756757 39.8594595,3.56756757 Z"></path>
                                    <path stroke="#3cb1c6" d="M36.2918919,0 L4.03243243,0 C1.81459459,0 0.0201621622,1.81459459 0.0201621622,4.03243243 L0,40.3243243 L8.06486486,32.2594595 L36.2918919,32.2594595 C38.5097297,32.2594595 40.3243243,30.4448649 40.3243243,28.227027 L40.3243243,4.03243243 C40.3243243,1.81459459 38.5097297,0 36.2918919,0 Z"></path>
                                    <polygon fill="#6ABE62" points="26.162 8.324 28.885 11.213 23.082 17.368 18.325 12.323 9.514 21.681 11.19 23.459 18.325 15.892 23.082 20.937 30.574 13.004 33.297 15.892 33.297 8.324"></polygon>
                                </g>
                            </svg>
                        </div>
                        <div class="media-body">
                            <h5 class="pb-1 fw-semi-bold">Live Preview</h5>
                            <small class="meta d-block lh-18">
                                <span>For Live Preview of the Template <a href="">Click Here</a>.</span>
                            </small>
                        </div>
                    </div>
                    <div class="media media-card">
                        <div class="media-img w-auto h-auto rounded-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46">
                                <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                    <path fill="#c3e5eb" d="M39.8594595,3.56756757 L7.6,3.56756757 C5.38216216,3.56756757 3.58772973,5.38216216 3.58772973,7.6 L3.56756757,43.8918919 L11.6324324,35.827027 L39.8594595,35.827027 C42.0772973,35.827027 43.8918919,34.0124324 43.8918919,31.7945946 L43.8918919,7.6 C43.8918919,5.38216216 42.0772973,3.56756757 39.8594595,3.56756757 Z"></path>
                                    <path stroke="#3cb1c6" d="M36.2918919,0 L4.03243243,0 C1.81459459,0 0.0201621622,1.81459459 0.0201621622,4.03243243 L0,40.3243243 L8.06486486,32.2594595 L36.2918919,32.2594595 C38.5097297,32.2594595 40.3243243,30.4448649 40.3243243,28.227027 L40.3243243,4.03243243 C40.3243243,1.81459459 38.5097297,0 36.2918919,0 Z"></path>
                                    <polygon fill="#6ABE62" points="26.162 8.324 28.885 11.213 23.082 17.368 18.325 12.323 9.514 21.681 11.19 23.459 18.325 15.892 23.082 20.937 30.574 13.004 33.297 15.892 33.297 8.324"></polygon>
                                </g>
                            </svg>
                        </div>
                        <div class="media-body">
                            <h5 class="pb-1 fw-semi-bold">Free Download</h5>
                            <small class="meta d-block lh-18">
                                <span>For Download <a href="#" data-toggle="modal" data-target="#downloadmodal"><i class="la la-flag mr-1"></i> Click Here</a></span>
                            </small>
                        </div>
                    </div>
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-19 pb-3 fw-semi-bold">About Template</h3>
                            <div class="divider"><span></span></div>
                            <div class="icon-box pt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">Last Update</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">{{ Cmf::create_time_ago($data->updated_at) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box pt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">Published</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">{{ Cmf::create_time_ago($data->created_at) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box pt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">High Resolution</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">Yes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box pt-3">
                                <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">Compatible Browsers</span>
                                <p class="fs-14 lh-20">Firefox, Safari, Opera, Chrome, Edge</p>
                            </div><!-- end icon-box -->
                            <div class="icon-box pt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">Documentation</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">Well Documented</span>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box pt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">Layout</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="fw-semi-bold d-block text-uppercase fs-13 lh-22">Responsive</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    @if($data->galleryimages)
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-19 pb-3 fw-semi-bold">Photos</h3>
                            <div class="divider"><span></span></div>
                            <div class="photo-gallery pt-4">
                                <div class="row mb-3">
                                    @foreach(explode(',' , $data->galleryimages) as $r)
                                    <div @if ($loop->first) class="col-lg-12" @else class="col-md-6" @endif>
                                        <a href="{{ url('public/images') }}/{{ $r }}" class="gallery-item" data-fancybox="company-detail-gallery">
                                            <img src="{{ url('public/images') }}/{{ $r }}" alt="review image">
                                        </a>
                                    </div><!-- end col-lg-12 -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    @endif
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end company-area -->
<!-- ================================
         END COMPANY AREA
================================= -->
<!-- Modal -->
<div class="modal fade modal-container report-form" id="downloadmodal" tabindex="-1" role="dialog" aria-labelledby="reportModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="reportModalTitle">Download this Template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="fs-15 lh-20 pb-3 text-black">For Download Please Fill This Form? </p>
                <form method="post" action="{{ url('reporttemplate') }}">
                    @csrf
                    <div class="form-group">
                        <label>Are You Developer</label>
                        <select name="reason" class="select-container select--container">
                            <option value="">Are You Developer</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control custominput" type="text" placeholder="Enter Your Name" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control custominput" type="text" placeholder="Enter Your Email" name="email">
                    </div>
                    <div class="btn-box text-center">
                        <button type="submit" class="btn theme-btn w-100">
                            Download <i class="la la-download icon ml-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade modal-container report-form" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="reportModalTitle">Report this Template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="fs-15 lh-20 pb-3 text-black">Is there a problem with this Template? <br> Please describe.</p>
                <form method="post" action="{{ url('reporttemplate') }}">
                    @csrf
                    <div class="form-group">
                        <select name="reason" class="select-container select--container">
                            <option value="0">Select a Reason</option>
                            <option value="1">The Template is against the site rules</option>
                            <option value="2">The Template has deceptive information</option>
                            <option value="2">The Template contains bad words</option>
                            <option value="3">Other reason</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="5" class="form-control form--control fs-14" placeholder="Describe about this company here..."></textarea>
                    </div>
                    <div class="btn-box text-center">
                        <button type="submit" class="btn theme-btn w-100">
                            Submit Report <i class="la la-arrow-right icon ml-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection