@component('layouts.app', [
    'title' => 'Posts'
])

    <h1>{{ $post->title }}</h1>

    @if($post->subtitle)
        <h2 class="subtitle">{{ $post->subtitle }}</h2>
    @endif

    {!! $post->content !!}
@endcomponent