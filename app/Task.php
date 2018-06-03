<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //App\Task::where('everythingIfyouwant',1)->get();
    // public static function incomplete(){
    // 	return static::where('completed',0)->get();
    // }
    public static function ScopeIncomplete($query){
    	return $query->where('id',1);
    }
}
