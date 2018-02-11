@component('layouts.app')

    <div class="intro-content container">
        <h1>Jack Whiting</h1>
        <div class="split-content">
            <div class="split__left">
                <p><b>I'm a full stack developer, working with Laravel and WordPress, based in Nottingham, UK.</b></p>
                <p>I run a small studio called <a href="#" title="Made By Lune">Lune</a> building brochure sites, online stores and web applications.</p>
                <p>Otherwise, I balance living with Crohn's Disease, gaming and dealing with an unhealthy obsession for milky bars.</p>
                <p>You can find my code on <a href="https://github.com/jackabox" title="Jack's Github">GitHub</a> or my occasional ramblings on
                    <a href="https://twitter.com/jackabox" title="Jack's Twitter">Twitter</a>. Want to work together? <a href="#">Contact me at Lune</a>.</p>
            </div>
            <div class="split__right">
                <img src="{{ asset('img/jack.jpg') }}" alt="">
            </div>
        </div>
    </div>

@endcomponent