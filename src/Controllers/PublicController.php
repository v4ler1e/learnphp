<?php

namespace App\Controllers;

use Exception;
use PDO;
use PDOException;

class PublicController {
    public function index() {

        $servername = "localhost:33061";
        $username = "root";
        $password = "example";
        $dbname = "learnphp";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }



        $title = 'World';
        view('index', compact('title', 'posts'));
    }

    public function us() {
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some U.S body 1',
            ],
            [
                'title' => 'Some U.S title 2',
                'date' => 'January 4, 2021',
                'author' => 'Jaanus',
                'body' => 'Some U.S body 2',
            ],
            [
                'title' => 'Some U.S title 3',
                'date' => 'January 6, 2021',
                'author' => 'Tseburaska',
                'body' => 'Some U.S body 3',
            ],
            [
                'title' => 'Some U.S title 4',
                'date' => 'January 8, 2021',
                'author' => 'Gena',
                'body' => 'Some U.S body 4',
            ],
        ];
        view('us', compact('posts'));
    }

    public function tech() {
    $title = 'Technology';

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
 

        view('tech', compact('posts'));
    }
    
    public function forms() {
        view('forms');
    }

    public function answer() {
        dump($_GET, $_POST);
    }
}