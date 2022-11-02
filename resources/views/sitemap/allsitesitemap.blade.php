<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($posts as $post)
        @if($post->modulename != 'blogcategory')
            @if($post->modulename != 'singlesitemap')
                @if($post->modulename != 'singleblog')
                    @if($post->modulename != 'singlequestion')
                        @if($post->modulename != 'category')

                             <sitemap>
                                <loc>{{url($post->url)}}</loc>
                              <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
                            </sitemap>
                        @endif
                    @endif
                @endif
            @endif
        @endif
    @endforeach
</sitemapindex>