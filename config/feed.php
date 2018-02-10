<?php

return [

    'feeds' => [
        'main' => [
            /*
             * Here you can specify which class and method will return
             * the items that should appear in the feed. For example:
             * 'App\Model@getAllFeedItems'
             *
             * You can also pass an argument to that method:
             * ['App\Model@getAllFeedItems', 'argument']
             */
            'items' => 'App\Content\Posts@feed',
            'url' => '/feed',
            'title' => 'Jack Whiting',
            'description' => 'Full-stack developer living in Nottingham, UK. I run a studio called Lune. I write about PHP, Programming and Life.'
        ],
    ],

];
