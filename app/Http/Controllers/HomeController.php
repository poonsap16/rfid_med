<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        $user = Auth::user()->group;
        $username = Auth::user()->name;
        if($user == 'admin'){
            return view('draft.admin');
        } else if ($user == 'edu'){
            return view('draft.edu');
            } else if ($user == 'mitting'){
        }

        
    }
}
