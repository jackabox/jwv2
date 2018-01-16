@component('layouts.app', [
    'title' => 'Posts'
])

    <div class="container inner-container">
        @foreach ($paginator as $post)
            <h2>
                <a href="{{ $post->url }}">{{ $post->title }}</a>
            </h2>

            {!! $post->summary !!}

            @if ($post->tags)
                <p>
                @foreach ($post->tags as $tag)
                    <span style="border-radius: 3px; padding: 3px 8px; font-size: 14px; background: #e7e7e7; margin-right: 5px">{{ $tag }}</span>
                @endforeach
                </p>
            @endif
        @endforeach

        @if ($paginator->hasPages())
            <section class="blog__paginator">
                @if (!$paginator->onFirstPage())
                    @php
                        $nextPageUrl = $paginator->currentPage() === 2 ?
                            url('posts') :
                            url('posts/page/'.($paginator->currentPage() - 1));
                    @endphp
                    <a href="{{ $nextPageUrl }}" rel="prev" class="blog__paginator__newer">
                        Newer
                    </a>
                @endif
                
                @if ($paginator->hasMorePages())
                    @php($previousPageUrl = url('posts/page/'.($paginator->currentPage() + 1)))
                    <a href="{{ $previousPageUrl }}" rel="next" class="blog__paginator__older">
                        Older
                    </a>
                @endif
            </section>
        @endif
    </div>

@endcomponent