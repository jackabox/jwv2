@component('layouts.app', [
    'title'     => $post->title,
    'backlink'  => true
])

    <div class="container inner-container">
        <header class="blog__header">
            @if($post->subtitle)
                <h2 class="subtitle">{{ $post->subtitle }}</h2>
            @endif
        </header>

        <article class="blog__article">
            {!! $post->content !!}
        </article>
    </div>
@endcomponent