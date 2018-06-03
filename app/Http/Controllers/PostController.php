<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show(){
    	return view('posts.show');
    }
    public function create(){
    	return view('posts.create');
    }
    public function store(){

		// $tasks = App\Task::all();
		$task = DB::table('tasks')->insert(
		['claim_id' => '1105'],['accident_id'=>'125125'],['car_brand'=>'HONDA'],['car_gen'=>'qwr'],['company'=>'สหมงคล'],['state'=>'ทำสี'],['customer_name'=>'สมบัติ']);
		return view('login.index',compact('task'));

	// Create a new post using the request data
	// Save it to the database
	// And then redirect to the home page.
    	// dd(request()->all()); 
	// $post = new Post;
	// $post->title = request ('title');
	// $post->body = request		return;

    }
}
