<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
	//In this query for load category in sidebar 
    public static function populars()
    {
    	return static::all()
                    ->take(5);
    }


     protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
