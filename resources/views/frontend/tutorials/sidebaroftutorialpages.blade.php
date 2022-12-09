<div class="row pr-3 sidebar-tutorial">
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
        <div class="   bg-light">
            <div>
            
            
            <ul class="py-4 px-3 trending">
            <div class="row">
            @foreach($categories as $r)
            <div class="col-md-6">
                <li class="border-bottom py-2"><a href="{{ url('tutorials') }}/{{$r->url}}">{{ $r->name }}</a></li>
            </div>
                @endforeach
                </div>
            </ul>
            </div>
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