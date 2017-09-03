<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public static function incomplete()
    {
    	return self::where('completed',0)->get();
    }
}
