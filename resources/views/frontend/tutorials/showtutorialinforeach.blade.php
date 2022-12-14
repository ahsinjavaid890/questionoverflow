<div class="col-md-12 ">
  <div class="card bg-white border-0 tutorials-card mt-3">
      <div class="card-body pl-2 pt-3 ">
        <div class="row">
            <div class="col-md-5 pr-0">
            <img src="{{ url('public/images') }}/{{ $r->image }}" class="w-100 ">
            </div>
            <div class="col-md-7 ">
              <h5 class="heading  ">
                <a href="{{ url('tutorials') }}/{{$r->categoryurl}}/{{ $r->tutorialurl }}" class="text-dark font-weight-bold">{{ $r->name }}
                </a>
               </h5>
               <div class="comments pt-2">
                 <p class="d-inline"><span class="codex">By: Question Overflow </span><b>|</b> <span class="codex"> In: <a href="{{ url('tutorials') }}/{{$r->categoryurl}}" class="link">{{ $r->categoryname }}</a></span> <b>|</b></p>
                 <span class="codex">Last Updated: {{ Cmf::create_time_ago($r->updated_at) }} </span>
                 <p class="card-text text-dark text-justify paragraph pt-2">{!! \Illuminate\Support\Str::limit(strip_tags($r->description), 220, $end='...') !!}</p>
               </div>
               <div class="d-flex justify-content-between mt-2 ">
                  <div class="pt-2">
                    <a href="{{ url('tutorials') }}/{{$r->categoryurl}}/{{ $r->tutorialurl }}#comments" class="link font-weight-bold">{{ DB::table('tutorial_comments')->where('tutorial_id' , $r->id)->count() }} comments</a>
                  </div>
                  <div class="">
                   <a href="{{ url('tutorials') }}/{{$r->categoryurl}}/{{ $r->tutorialurl }}" class="btn theme-btn theme-btn-outline mr-2">Read Full <i class="la la-arrow-right ml-1"></i></a>
                  </div>
               </div>
            </div>
        </div>
        
       
      </div>
  </div>
</div>