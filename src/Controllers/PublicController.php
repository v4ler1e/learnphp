<?php

namespace App\Controllers;

use App\DB;

class PublicController
{
    public function index()
    {
        $db = new DB();
        $posts = $db->all('posts');
        dump($posts);
        $users = $db->all('users');
        dump($users);
        $title = 'World';
        view('index', compact('title', 'posts'));
    }



    public function us()
    {
        $posts = [
        [
            'title' => 'AI Finally Learned How to Make Coffee',
            'date' => 'September 7, 2026',
            'author' => 'Bublik',
            'body' => 'Artificial intelligence can now make coffee, but it still forgets to add sugar.',
        ],
        [
            'title' => 'Old Phones Are Becoming Cool Again',
            'date' => 'September 67, 2026',
            'author' => 'Mihhail',
            'body' => 'People are buying old phones again because their batteries somehow last longer than modern ones.',
        ],
        [
            'title' => 'Apple Unveils iPhone 67 Pro Ultra Mega Max Plus 5G WiFi Bluetooth Skibidi Toilet Edition That Reads Your Mind, Steals Your Money and Calls You Bro',
            'date' => 'September 25, 2050',
            'author' => 'Valera',
            'body' => 'The new iPhone has 67 cameras, no charging port, costs approximately one kidney and a soul.',
        ],
        [
            'title' => 'Web Developers Discover Sleep',
            'date' => 'September 2, 3000',
            'author' => 'Danik',
            'body' => 'A new study shows that web developers can actually sleep after fixing all CSS problems.',
        ],
    ];
        view('us', compact('posts'));
    }



    public function forms()
    {
        view('forms');
    }


    
    public function answer()
    {
        dump($_GET, $_POST);
    }
}
