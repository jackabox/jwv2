@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>

    @if($post->subtitle)
        <h2 class="subtitle">{{ $post->subtitle }}</h2>
    @endif

    {!! $post->content !!}
@endsection