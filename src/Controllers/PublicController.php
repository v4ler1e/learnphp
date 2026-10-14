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