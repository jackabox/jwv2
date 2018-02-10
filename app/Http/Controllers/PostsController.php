<?php

namespace App\Http\Controllers;

use App\Content\Posts;

class PostsController extends Controller
{
    public function index(Posts $posts)
    {
        return view('posts.all', [
            'posts' => $posts->paginate(10),
        ]);
    }

    public function page($page, Posts $posts)
    {
        return view('posts.all', [
            'posts' => $posts->paginate(10, 'page', $page),
        ]);
    }

    public function show($year, $slug, Posts $posts)
    {
        return view('posts.show', [
            'post' => $posts->find($year, $slug),
        ]);
    }
}
