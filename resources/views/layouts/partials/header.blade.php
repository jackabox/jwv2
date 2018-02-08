<div class="site-header">
    <div class="container inner-container">
        <header>
            <h1><a href="{{ url('/') }}">Jack</a></h1>

            <ul>
                <li><a href="{{ url('posts') }}">Posts</a></li>
                <li><a href="mailto:hi@jackwhiting.co.uk">hi@jackwhiting.co.uk</a></li>
            </ul>
        </header>
        
        @isset($created)        
            <p class="post__date">{{ $created }}</p>
        @endisset
            
        @isset($title)
            <h1>{{ $title }}</h1>
        @endisset
    </div>
</div>