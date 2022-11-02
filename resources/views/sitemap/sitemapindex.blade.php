<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach($posts as $r)
    @if($r->modulename != 'answerquestion')
  <sitemap>
    <loc>{{ url('') }}/{{ $r->url }}</loc>
  <lastmod>{{ date('Y-m-dTH:i:sP', time()) }}</lastmod>
</sitemap>
@endif
    @endforeach

</sitemapindex>