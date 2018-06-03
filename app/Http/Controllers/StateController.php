<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{
    //
    public function getState1_user(){
    	return view('menu.state.state1_user');
    }
    public function getState2_costWork(){
    	return view('menu.state.state2_costWork');
    }
    public function getState3_costItem(){
    	return view('menu.state.state3_costItem');
    }
    public function getState4_costEtc(){
    	return view('menu.state.state4_costEtc');
    }
    public function getState5_picture(){
    	return view('menu.state.state5_picture');
    }
    public function getState6_total(){
    	return view('menu.state.state6_total');
    }
    // public function getIndex(){
    //     // $tasks = App\Task::all();
    // $task = DB::table('tasks')->latest()->get();
    // return view('login.index',compact('tasks'));

    // }
    public function getRedirect_Index(){
        return redirect('/index');
    }
}
