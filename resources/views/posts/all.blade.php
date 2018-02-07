@component('layouts.app', [
    'title' => 'Posts'
])

    <div class="container inner-container">
        @foreach ($posts as $post)
            <div class="post">
                <p class="post__date">{{ $post->created }}</p>

                <h2>
                    <a href="{{ $post->url }}">{{ $post->title }}</a>
                </h2>

                <p>{!! $post->summary !!} <a href="{{ $post->url }}">Read More</a></p>

                @if ($post->tags)
                    <p>
                    @foreach ($post->tags as $tag)
                        <span class="post__tag">{{ $tag }}</span>
                    @endforeach
                    </p>
                @endif
            </div>
        @endforeach

        @if ($posts->hasPages())
            <section class="pagination">
                @if (!$posts->onFirstPage())
                    @php
                        $nextPageUrl = $posts->currentPage() === 2 ?
                            url('posts') :
                            url('posts/page/'.($posts->currentPage() - 1));
                    @endphp
                    <a href="{{ $nextPageUrl }}" rel="prev" class="pagination__newer">
                        Newer
                    </a>
                @endif
                
                @if ($posts->hasMorePages())
                    @php($previousPageUrl = url('posts/page/'.($posts->currentPage() + 1)))
                    <a href="{{ $previousPageUrl }}" rel="next" class="pagination__older">
                        Older
                    </a>
                @endif
            </section>
        @endif
    </div>

@endcomponent