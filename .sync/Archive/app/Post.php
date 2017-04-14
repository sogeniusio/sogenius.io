<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 	// Adds category model
 	public function category()
 	{
	   // Defines relationship
	    return $this->belongsTo('App\Category');

 	}

 	public function tags()
 	{
 		// Defines relationship
 		return $this->belongsToMany('App\Tag');
 	}

 	public function comments()
 	{
 		//Defines relationship
 		return $this->hasMany('App\Comment');
 	}
}
