<div class="media media-card media--card align-items-center">
    <div class="votes">
        <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
            <span class="vote-counts">3</span>
            <span class="vote-icon"></span>
        </div>
        <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
            <span class="vote-counts">1</span>
            <span class="answer-icon"></span>
        </div>
    </div>
    <div class="media-body">
        <h5><a href="{{ url('question') }}/{{ $r->question_url }}">{{ $r->question_name }}</a></h5>
        <small class="meta">
        <span class="pr-1">{{ Cmf::create_time_ago($r->created_at) }}</span>
        <a href="{{ url('profile') }}/{{ $r->question_auther }}" class="author">{{ DB::table('users')->where('username' , $r->question_auther)->first()->name }}</a>
    </small>
        <div class="tags">
            <a href="{{ url('subject') }}/{{ DB::table('categories')->where('name' , $r->question_subject)->first()->url }}" class="tag-link">{{ $r->question_subject }}</a>
        </div>
    </div>
</div>