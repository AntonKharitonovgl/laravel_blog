<article class="blog-post">
    <h2 class="blog-post-title"><a href="/articles/{{$article->symbol_code}}">{{ $article->title }}</a></h2>
    <p class="blog-post-meta">{{ $article->created_at }}</a></p>
    @if($article->tags->isNotEmpty())
    <div>
        @foreach($article->tags as $tag)
            <a  href="#" class="bg-secondary text-white text-decoration-none">{{$tag->name}}</a>
        @endforeach
    </div>

    @endif
    <p>{{ $article->shot_description }}</p>
</article>
