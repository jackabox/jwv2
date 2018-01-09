@component('layouts.app', [
    'title' => 'Posts'
])

    <div class="container">
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