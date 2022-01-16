<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BookingfootballController extends Controller
{
    public function index()
    {
        return view('bookingfootball');
    }

    public function store(Request $request)
    {
	DB::table('reservation')->insert([
		'UserId' => $request->name,
		'FieldsID' => $request->FieldsID,
		'DateReserv' => $request->date 
        // 'DateReserv' => $request->time
		
	]);
    
	
	return redirect('/home');
    dd($request);
 
    }
}