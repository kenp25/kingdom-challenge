<?php

namespace App\Http\Controllers;

use App\Challenge;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('authorized');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challenges = Challenge::where('sent', 1)->get();
        return view('home', ['challenges'=> $challenges]);
    }
}
