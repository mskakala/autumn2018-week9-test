<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Hero::all();
        //->orderBy('name');
        //->get();

        return view('home', compact('results'));
    }

//NEW

   // public function homepage()
   // {
   //     return view('layout.app');
   // }
}
