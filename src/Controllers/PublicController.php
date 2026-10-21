<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index() {
        $posts = Post::all();
        $title = 'World';
        view('index', compact('title', 'posts'));
    }

    public function us() {
        $title = 'U.S';
        $posts = Post::all();
        view('us', compact('posts'));
    }

    public function tech() {
    $title = 'Technology';

    $posts = [
        [
            'title' => 'African Intelligence Is Changing Technology',
            'date' => 'October 67, 2026',
            'author' => 'Misha',
            'body' => 'African intelligence is becoming more popular and is used in many modern applications.',
        ],
        [
            'title' => 'New oldphones Are Getting Smarter',
            'date' => 'September 28, 2026',
            'author' => 'Richard',
            'body' => 'Modern smartphones are becoming faster and more powerful every year.',
        ],
        [
            'title' => 'The Oldest of Web Development',
            'date' => 'September 25, 2026',
            'author' => 'Daniil',
            'body' => 'Web technologies continue to develop and make websites faster and easier to use.',
        ],
        [
            'title' => 'New Iphone 67 pro ultra duo max',
            'date' => 'September 25, 2077',
            'author' => 'Valeria',
            'body' => 'Omg',
        ],
    ];

        view('tech', compact('posts'));
    }
    
    public function forms() {
        view('forms');
    }

    public function answer() {
        dump($_GET, $_POST);
    }
}