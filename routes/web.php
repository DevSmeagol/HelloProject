<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/	
// Route::get('index','StateController@getIndex');

//-------------State--------------------
Route::get('User','StateController@getState1_user');
Route::get('costWork','StateController@getState2_costWork');
Route::get('costItem','StateController@getState3_costItem');
Route::get('costEtc','StateController@getState4_costEtc');
Route::get('Picture','StateController@getState5_picture');
Route::get('Total','StateController@getState6_total');

Route::post('/posts','PostController@store');
Route::get('/posts/create','PostController@create');

Route::get('gotoIndex', 'StateController@getRedirect_Index');
    
Route::get('/', function () {
    return view('welcome');
});
Route::get('index',function(){
	$tasks = App\Task::all();
	return view('login.index', compact('tasks'));	
});

	
Route::get('index/{task_id}',function($id){
	$task_id = App\Task::find($id);
	
	return view('login.show_index',compact('task_id'));
});
