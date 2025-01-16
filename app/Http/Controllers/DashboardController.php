<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {


        $posts = Post::orderBy("created_at", "desc")->get();

        $users = [
            [
                'name' => 'meno 1',
                'age' => 17,
                'descript' => 'bernard 1',
                'likes' => 111,
                'date' => '3-5-2024'
            ],
            [
                'name' => 'meno 2',
                'age' => 26,
                'descript' => 'bernard 2',
                'likes' => 222,
                'date' => '15-7-2024'
            ],
            [
                'name' => 'meno 3',
                'age' => 19,
                'descript' => 'bernard 3',
                'likes' => 333,
                'date' => '27-11-2024'
            ]
        ];
        $comms = [
            [
                'name' => 'comm 1',
                'descript' => 'Hello 1',
                'date' => '1 hour ago'
            ],
            [
                'name' => 'comm 2',
                'descript' => 'Hello 2',
                'date' => '16 hours ago'
            ],
            [
                'name' => 'comm 3',
                'descript' => 'Hello 3',
                'date' => '2 days ago'
            ]
        ];

        //return view('dashboard', ['users' => $users], ['comms' => $comms]);

        return view("dashboard", [
            // dokoncit - done
            'users' => $users,
            'posts' => $posts,
        ]);
    }
}
