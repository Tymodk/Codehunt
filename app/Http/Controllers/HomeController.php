<?php

namespace App\Http\Controllers;
use App\Codetable;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $codetable = Codetable::where('user_id', Auth::user()->id)->first();
        return view('home')->with('codetable', $codetable);
    }
    

}
