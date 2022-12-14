<div class="row pr-3 sidebar-tutorial">
    <div class="col-md-12 subscribe py-4">
        <h6 class="text-white"> Subscribe for your question answer's</h6>
        <div class="py-2">
        <input type="email" class="form-control rounded-0" id="" aria-describedby="emailHelp" placeholder="Enter email">
        <a href="#" class="btn btn-block btn-dark rounded-0 mt-2 text-white font-weight-bold">SUBSCRIBE</a>
        </div>
        <div class="social-icon py-2 text-center">
            <a href="#" class="border rounded  pl-2 pr-1 py-1 mr-1"><i class="la la-facebook mr-1 text-white"></i></a>
            <a href="#"  class="border rounded pl-2 pr-2 py-1 mr-1"><i class="la la-twitter  text-white"></i></a>
            <a href="#"  class="border rounded pl-2 pr-2 py-1 mr-1"><i class="la la-linkedin  text-white"></i></a>
            <a href="#"  class="border rounded pl-2 pr-2 py-1 mr-1"><i class="la la-instagram  text-white"></i></a>
        </div>
    </div>
    <div class="col-md-12 py-4 px-0  ">
        <h5 class=" text-white p-2 trends text-uppercase mt-1">Our Trending Topics</h5>
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
        <h5 class="trends text-white p-2  text-uppercase ">Our Trending Tutorials</h5>
        <ul class="py-4 px-3 trending bg-light">
            @foreach(DB::table('tutorials')->orderby('created_at' , 'asc')->limit(10)->get() as $t)
            <li class="border-bottom py-2"><a href="{{ url('tutorials') }}/{{ DB::table('tutorialcategories')->where('id' , $t->category_id)->first()->url }}/{{ $t->url }}">{{ $t->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>