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
    public function gentable()
    {
        
        $codetable = Codetable::where('user_id', Auth::user()->id)->first();
        if($codetable['user_id'] === null){
            $codetable = new Codetable();
            $codetable['code1'] = Str::random(8);
            $codetable['code2'] = Str::random(8);
            $codetable['code3'] = Str::random(8);
            $codetable['code4'] = Str::random(8);
            $codetable['code5'] = Str::random(8);
            Auth::user()->codetable()->save($codetable);
            session()->flash('status', 'Code generation was successful!');
            return redirect('home');
        }
        return redirect('home');
        
    }
    public function code1found($id)
    {
        $code1 = Codetable::where('user_id', Auth::user()->id)->where('code1', $id)->first();
        $code1['found1'] = 1;
        $code1->save();
        return $code1;
    }
    public function code2found($id)
    {
        $code2 = Codetable::where('user_id', Auth::user()->id)->where('code2', $id)->first();
        $code2['found2'] = 1;
        $code2->save();
        return $code2;
    }
    public function code3found($id)
    {
        $code3 = Codetable::where('user_id', Auth::user()->id)->where('code3', $id)->first();
        $code3['found3'] = 1;
        $code3->save();
        return $code3;    
    }
    public function code4found($id)
    {
        $code4 = Codetable::where('user_id', Auth::user()->id)->where('code4', $id)->first();
        $code4['found4'] = 1;
        $code4->save();
        return $code4;
    }
    public function code5found($id)
    {   
        $code5 = Codetable::where('user_id', Auth::user()->id)->where('code5', $id)->first();
        $code5['found5'] = 1;
        $code5->save();
        return $code5;
    }

}
