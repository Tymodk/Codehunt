<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Codetable;
use App\User;
use Auth;
use Illuminate\Support\Str;


class CodeController extends Controller
{
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
    public function huntstart()
    {
        return view('huntstart');
    }
    public function hunt2()
    {
        $codetable = Codetable::where('user_id', Auth::user()->id)->first();
        
       	
        return view('hunt2')->with('codetable', $codetable);

    }
    public function startlink1()
    {
        return view('startlink1');
    }
    public function startlink2()
    {
        return view('startlink1');
    }
    public function startlink3()
    {
        return view('startlink1');
    }
    public function startlink4()
    {
        return view('startlink1');
    }
    public function startlink5()
    {
        return view('startlink1');
    }
    public function startlink6()
    {
        $codetable = Codetable::where('user_id', Auth::user()->id)->first();
        return view('startlink6')->with('codetable', $codetable);
    }

    public function code1found($id)
    {
        $code1 = Codetable::where('user_id', Auth::user()->id)->where('code1', $id)->first();
        $code1['found1'] = 1;
        $code1->save();
        return redirect('home');
    }
    public function code2found($id)
    {
        $code2 = Codetable::where('user_id', Auth::user()->id)->where('code2', $id)->first();
        $code2['found2'] = 1;
        $code2->save();
        return redirect('home');
    }
    public function code3found($id)
    {
        $code3 = Codetable::where('user_id', Auth::user()->id)->where('code3', $id)->first();
        $code3['found3'] = 1;
        $code3->save();
        return redirect('home');   
    }
    public function code4found($id)
    {
        $code4 = Codetable::where('user_id', Auth::user()->id)->where('code4', $id)->first();
        $code4['found4'] = 1;
        $code4->save();
        return redirect('home');
    }
    public function code5found($id)
    {   
        $code5 = Codetable::where('user_id', Auth::user()->id)->where('code5', $id)->first();
        $code5['found5'] = 1;
        $code5->save();
        return redirect('home');
    }
}
