<div class="site-header">
    <div class="container inner-container">
        <header>
            <h1><a href="{{ url('/') }}">Jack Whiting</a></h1>
        </header>
{{-- 
        @isset($backlink)
            <p style="font-size: 1rem; margin-bottom: -3rem; margin-top: 3rem;"><a href="{{ url('posts') }}" class="blog__back">&laquo; Back To Blog</a></p>
        @endisset --}}
        
        @isset($created)        
            <p class="post__date">{{ $created }}</p>
        @endisset
            
        @isset($title)
            <h1>{{ $title }}</h1>
        @endisset
    </div>
</div>