<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	 protected $fillable = ['firstName','lastName','idCard','tel','idLine','address'];

	// protected $fillable = ['firstName','lastName','idCard','tel','idLine','address'];
    //
    // public static funtion checkName(){
    // 	return static::where('id','3')->get();
    // }
}
