<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function index(Request $request)
    // {
    //     $todo = Todo::where('user_id', $request->session()->get('user_id'));

    //     return view('index', ["todos" => $todo]);
    // }

    public function index()
    {
        return view('home');
    }
}