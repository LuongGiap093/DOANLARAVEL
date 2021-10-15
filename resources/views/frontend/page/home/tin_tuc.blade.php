<!-- Latest news -->
<div class="posts-wrap">
    <div class="posts-list">
        @foreach($blogs as $blog)
        <div class="posts-i">
            <a class="posts-i-img" href="post.html">
                <span style="background: url({{asset('public/images/'. $blog->image)}})"></span>
            </a>
            <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>{{ $blog->created_at->format('d') }}</span>{{ $blog->created_at->format('M') }}</time>
            <div class="posts-i-info">
                <a href="blog.html" class="posts-i-ctg">Tin tức</a>
                <h3 class="posts-i-ttl">
                    <a href="post.html">{!! $blog->blog_title !!}</a>
                </h3>
            </div>
        </div>
        @endforeach
        <div class="posts-i">
            <a class="posts-i-img" href="post.html">
                <span style="background: url(http://placehold.it/354x236)"></span>
            </a>
            <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>29</span> Jan</time>
            <div class="posts-i-info">
                <a href="blog.html" class="posts-i-ctg">Articles</a>
                <h3 class="posts-i-ttl">
                    <a href="post.html">Ex atque commodi</a>
                </h3>
            </div>
        </div>
    </div>
</div>
