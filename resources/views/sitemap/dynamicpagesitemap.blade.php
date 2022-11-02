<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
     @foreach ($posts as $post)
  <sitemap>
    <loc>{{url($post->url)}}</loc>
  <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
</sitemap>
@endforeach
</sitemapindex>