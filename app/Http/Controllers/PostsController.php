<?php

namespace App\Http\Controllers;

use App\Content\Posts;

class PostsController extends Controller
{
    public function index(Posts $posts)
    {
        dd($posts->all());

//        return view('posts.index', [
//            'paginator' => $posts->paginate(20),
//        ]);
    }

    public function show($year, $slug, Posts $posts)
    {
//        return view('posts.show', [
//            'post' => $posts->find($year, $slug),
//        ]);
    }
}
