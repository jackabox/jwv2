<div class="site-header">
    <div class="container inner-container">
        <header>
            <h1><a href="{{ url('/') }}">Jack Whiting</a></h1>
        </header>

        @isset($title)
            <h1>{{ $title }}</h1>
        @endisset
    </div>
</div>