<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {

        $users = [
            [
                'name' => 'meno 1',
                'age' => 17,
            ],
            [
                'name' => 'meno 2',
                'age' => 26,
            ],
            [
                'name' => 'meno 3',
                'age' => 19,
            ]
        ];

        return view('dashboard', ['users' => $users]);
    }
}
