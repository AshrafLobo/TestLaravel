<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /*static function incomplete(){

    	return static::where('complete',0)->get();
    }*/

    function scopeIncomplete($query){
    	return $query->where('complete', 0);
    }
}
