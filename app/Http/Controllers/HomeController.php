<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array(
            'date' => ' 2:00pm November 29, 2018',
            'title' => 'Bring Server Room Keys to Meeting',
            'body' => 'Don\'t forget the server room keys'
        );
        return view('home')->with('data', $data);;
    }
}
