@component('layouts.app', [
    'title' => $post->title
])

    <div class="container">
        <p style="font-size: 1rem"><a href="{{ url('posts') }}" class="blog__back">&laquo; All Posts</a></p>

        <header class="blog__header">
            <h1>{{ $post->title }}</h1>

            @if($post->subtitle)
                <h2 class="subtitle">{{ $post->subtitle }}</h2>
            @endif
        </header>

        <article class="blog__article">
            {!! $post->content !!}
        </article>
    </div>
@endcomponent