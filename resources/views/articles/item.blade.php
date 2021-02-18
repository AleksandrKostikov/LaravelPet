<article class="blog-post">
    <h2 class="blog-post-title"><a href="/articles/{{ $article->slug }}" style="text-decoration: none">{{ $article->title }}</a></h2>
    <p>{{ $article->preview_text }}</p>
    <p class="blog-post-meta">{{ $article->created_at->toFormattedDateString() }}</p>
</article>
