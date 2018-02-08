@component('layouts.app', [
    'title'     => $post->title,
    'created'   => $post->created
])

    <div class="container inner-container">
        <article class="blog__article">
            {!! $post->content !!}
        </article>
        
        @if ($post->tags)
            <p>
            @foreach ($post->tags as $tag)
                <span class="post__tag">{{ $tag }}</span>
            @endforeach
            </p>
        @endif
    </div>
@endcomponent