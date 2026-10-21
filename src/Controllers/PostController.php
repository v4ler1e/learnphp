<?php

namespace App\Controllers;

use App\Models\Post;

class PostController
{
    public function index()
    {
        $posts = Post::all();
        view('posts\index', compact('posts'));
    }

}