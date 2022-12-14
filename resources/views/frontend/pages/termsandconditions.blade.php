@extends('frontend.layouts.app')
@section('title')
<title>Terms and Condition | Question Overflow</title>
<meta name="DC.Title" content="Terms and Condition | Question Overflow">
<meta name="rating" content="general">
<meta name="description" content="Terms and Condition | Question Overflow">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="All Subjects">
<meta property="og:description" content="Terms and Condition | Question Overflow">
<meta property="og:site_name" content="Question Overflow">
<meta property="og:url" content="{{ url('') }}">
<meta property="og:locale" content="it_IT">
@endsection
@section('content')
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm overflow-hidden pt-50px pb-50px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content text-center">
            <h2 class="section-title pb-3">Terms & Conditions</h2>
            <ul class="breadcrumb-list">
                <li><a href="#">Home</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li>Terms & Conditions</li>
            </ul>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START TERMS AREA
================================= -->
<section class="terms-and-condition-area pt-60px pb-60px bg-white position-relative mt-2">
    <div class="container">
        <div class="card card-item">
           <div class="card-body row">
               <div class="col-lg-3">
                   <ul class="js-scroll-nav js--scroll-nav mb-40px">
                       <li class="active"><a href="#welcome-to-disku" class="page-scroll">Welcome</a></li>
                       <li><a href="#cookies" class="page-scroll">1. Cookies</a></li>
                       <li><a href="#using-our-services" class="page-scroll">2. Using our services</a></li>
                       <li><a href="#license" class="page-scroll">3. License</a></li>
                       <li><a href="#privacy-and-copyright-protection" class="page-scroll">4. Privacy and copyright protection</a></li>
                       <li><a href="#your-content-in-our-services" class="page-scroll">5. Your content in our services</a></li>
                       <li><a href="#hyperlinks" class="page-scroll">6. Hyperlinks</a></li>
                       <li><a href="#contact" class="page-scroll">7. Contact</a></li>
                   </ul>
               </div><!-- end col-lg-3 -->
               <div class="col-lg-9">
                   <div class="terms-panel-main-bar pl-3">
                       <div class="terms-panel mb-30px" id="welcome-to-disku">
                           <h3 class="fs-20 pb-3 fw-bold">Welcome to Question Overflow</h3>
                           <p class="pb-3 text-black">These terms and conditions outline the rules and regulations for the use of Question Overflow</p>
                           <p class="pb-3">Question Overflow is the Bigest, most trusted online community for developers to learn, share their programming knowledge, and build their careers.</p>
                       </div><!-- end terms-panel -->
                       <div class="terms-panel mb-30px" id="cookies">
                           <h3 class="fs-20 pb-3 fw-bold">1. Cookies</h3>
                           <p class="pb-3">When you visit this website, it may store or retrieve information on your browser, mostly in the form of cookies. This information might be about you, your preferences or your device and is mostly used to make the site work as you expect it to. The information does not usually directly identify you, but it can give you a more personalized web experience. Because we respect your right to privacy, you can choose not to allow some types of cookies. Click on the different category headings to find out more and manage your preferences. Please note, blocking some types of cookies may impact your experience of the site and the services we are able to offer.</p>
                       </div><!-- end terms-panel -->
                       <div class="terms-panel mb-30px" id="using-our-services">
                           <h3 class="fs-20 pb-3 fw-bold">2. Using our services</h3>
                           <p class="pb-3">You must follow any policies made available to you within the Services.</p>
                           <p class="pb-3">Don’t misuse our Services. For example, don’t interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.</p>
                           <p class="pb-3">Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Don’t remove, obscure, or alter any legal notices displayed in or along with our Services.</p>
                           <h4 class="fs-16 pb-3">A. Personal Data that we collect about you.</h4>
                           <p class="pb-3">Personal Data is any information that relates to an identified or identifiable individual. The Personal Data that you provide directly to us through our Sites will be apparent from the context in which you provide the data. In particular:</p>
                           <ul class="generic-list-item generic-list-item-bullet pb-3">
                               <li>When you register for a Disilab account we collect your full name, email address, and account log-in credentials.</li>
                               <li>When you fill-in our online form to contact our sales team, we collect your full name, work email, country, and anything else you tell us about your project, needs and timeline.</li>
                               <li>When you use the “Remember Me” feature of Disilab Checkout, we collect your email address, payment card number, CVC code and expiration date.</li>
                           </ul>
                           <p class="pb-3">When you respond to Disilab emails or surveys we collect your email address, name and any other information you choose to include in the body of your email or responses. If you contact us by phone, we will collect the phone number you use to call Disilab. If you contact us by phone as a Disilab User, we may collect additional information in order to verify your identity.</p>
                           <h4 class="fs-16 pb-3">B. Information that we collect automatically on our Sites.</h4>
                           <p class="pb-3">We also may collect information about your online activities on websites and connected devices over time and across third-party websites, devices, apps and other online features and services. We use Google Analytics on our Sites to help us analyze Your use of our Sites and diagnose technical issues.</p>
                           <p class="pb-3">To learn more about the cookies that may be served through our Sites and how You can control our use of cookies and third-party analytics, please see our Cookie Policy.</p>
                       </div><!-- end terms-panel -->
                       <div class="terms-panel mb-30px" id="license">
                           <h3 class="fs-20 pb-3 fw-bold">3. License</h3>
                           <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae consequatur culpa dolore earum, eos, labore minima molestias natus nisi numquam provident quasi quis quisquam reprehenderit velit voluptates! Nostrum, tenetur?</p>
                           <p class="text-black fw-medium">You must not:</p>
                           <ul class="text-black">
                               <li>Republish material from https://Disilab.com</li>
                               <li>Sell, rent or sub-license material from https://Disilab.com</li>
                               <li>Reproduce, duplicate or copy material from https://Disilab.com</li>
                           </ul>
                       </div><!-- end terms-panel -->
                       <div class="terms-panel mb-30px" id="privacy-and-copyright-protection">
                           <h3 class="fs-20 pb-3 fw-bold">4. Privacy and copyright protection</h3>
                           <p class="pb-3">Disilab’s privacy policies explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that Disilab can use such data in accordance with our privacy policies.</p>
                           <p class="pb-3">We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.</p>
                           <p class="pb-3">We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us, you can find information about submitting notices and Disilab’s policy about responding to notices in our
                               <a href="{{ url('contact') }}" class="text-color hover-underline">Help Center</a>.
                           </p>
                       </div><!-- end terms-panel -->
                       <div class="terms-panel mb-30px" id="your-content-in-our-services">
                           <h3 class="fs-20 pb-3 fw-bold">5. Your content in our services</h3>
                           <p class="pb-3">Some of our Services allow you to upload, submit, store, send or receive content. You retain ownership of any intellectual property rights that you hold in that content. In short, what belongs to you stays yours.</p>
                           <p class="pb-3">When you upload, submit, store, send or receive content to or through our Services, you give Front (and those we work with) a worldwide license to use, host, store, reproduce, modify, create derivative works (such as those resulting from translations, adaptations or other changes we make so that your content works better with our Services), communicate, publish, publicly perform, publicly display and distribute such content. The rights you grant in this license are for the limited purpose of operating, promoting, and improving our Services, and to develop new ones. This license continues even if you stop using our Services (for example, for a business listing you have added to Front Maps). Some Services may offer you ways to access and remove content that has been provided to that Service. Also, in some of our Services, there are terms or settings that narrow the scope of our use of the content submitted in those Services. Make sure you have the necessary rights to grant us this license for any content that you submit to our Services.</p>
                       </div><!-- end terms-panel -->
                       <div class="terms-panel mb-30px" id="hyperlinks">
                           <h3 class="fs-20 pb-3 fw-bold">6. Hyperlinks</h3>
                           <p class="pb-3">Our website may contain hyperlinks. These hyperlinks connect you to sites of other organisations which are not our responsibility. We have used our reasonable endeavours in preparing our own website and the information included in it is done so in good faith. However, we have no control over any of the information you can access via other websites. Therefore, no mention of any organisation, company or individual to which our website is linked shall imply any approval or warranty as to the standing and capability of any such organisations, company or individual on the part of The Book Depository.</p>
                       </div><!-- end terms-panel -->
                       <div class="terms-panel" id="contact">
                           <h3 class="fs-20 pb-3 fw-bold">7. Contact Information</h3>
                           <p class="pb-3">This Terms and conditions page was created at questionoverflow.com generator. If you have any queries regarding any of our terms, please <a href="{{ url('contact') }}" class="text-color hover-underline">Contact Us</a>.</p>
                       </div><!-- end terms-panel -->
                   </div><!-- end terms-panel-main-bar -->
               </div><!-- end col-lg-9 -->
           </div>
        </div>
    </div><!-- end container -->
</section><!-- end terms-and-condition-area -->
<!-- ================================
         END TERMS AREA
================================= -->
@endsection