<?php

return [
    /*
     * This is the class responsible for providing the URLs which must be redirected.
     * The only requirement for the redirector is that it needs to implement the
     * `Spatie\MissingPageRedirector\Redirector\Redirector`-interface
     */
    'redirector' => \Spatie\MissingPageRedirector\Redirector\ConfigurationRedirector::class,

    /*
     * By default the package will only redirect 404s. If you want to redirect on other
     * response codes, just add them to the array. Leave the array empty to redirect
     * always no matter what the response code.
     */
    'redirect_status_codes' => [
        \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND,
    ],

    /*
     * When using the `ConfigurationRedirector` you can specify the redirects in this array.
     * You can use Laravel's route parameters here.
     */
    'redirects' => [
        '/blog' => '/posts',
        '/about' => '/',
        '/about.html' => '/',
        '/work.html' => '',
        '/work' => '/',
        '/works/{page}' => '/',
        '/moving-on-from-adtrak-hello-fifteen' => '/posts/2018/goodbye-adtrak-hello-fifteen',
        '/setting-up-wsl-on-windows-10-for-php-laravel' => '/posts/2018/setting-up-a-windows-10-development-environment-with-wsl-php-laravel',
        '/beautiful-organised-results-in-phpunit' => '/posts/2017/beautiful-organised-results-in-phpunit',
        '/introduction-to-wordpress-plugin-development' => '/posts/2017/introduction-to-wordpress-plugin-development',
        '/chrome-63-forces-dev-domains-to-https' => '/posts/2017/chrome-63-forces-redirection-of-dev-to-https',
        '/picking-laravel-back-up' => '/posts/2017/picking-laravel-back-up',
        '/how-i-build-wordPress-plugins-framework' => '/posts/2017/how-i-build-wordPress-part-1-plugins-framework',
        '/moving-to-figma' => '/posts/2017/moving-to-figma',
        '/setting-up-and-using-yarn' => '/posts/2016/setting-up-and-using-yarn',
        '/visual-studio-code-and-five-extensions' => '/posts/2016/using-vs-code-and-recommended-extensions',
        '/university-isnt-everything-part-2' => '/posts/2016/university-isnt-everything-part-2',
        // OLD SITE
        '/blog/toggle-a-search-box-with-jquery' => '/posts',
        '/2012/clean-writer-pro-review' => '/posts',
        '/gridark-demo' => '/posts',
        '/tag/test' => '/posts',
        '/blog/odyssey-update' => '/posts',
        '/blog/2011/08' => '/posts',
        '/blog/gridark' => '/posts',
        '/2012/02/02/behind-the-design' => '/posts',
        '/blog/bon-remake' => '/posts',
        '/blog/2011/04/28/jwportfolio2/design2' => '/posts',
        '/freebies/gridark/feed' => '/posts',
        '/blog/fade-in-anchor-button-with-jQuery' => '/posts',
        '/blog/for-me-2013-was' => '/posts',
        '/gridark' => '/posts',
        '/category/wordpress/feed' => '/feed',
        '/freebies/musicdark-mini/feed' => '/feed',
    ],

];
