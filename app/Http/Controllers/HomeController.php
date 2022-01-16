<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    // public function index(Request $request)
    // {
    //     $todo = Todo::where('user_id', $request->session()->get('user_id'));

    //     return view('index', ["todos" => $todo]);
    // }

    public function index()
    {
        $reservation = DB::table('reservation')
        ->join('users','users.id','=','reservation.UserId')
        // ->select(DB::raw('RIGHT(DateReserv,5)'))
        ->get();

        

        return view('home', ['reservation' => $reservation]);
    }
}