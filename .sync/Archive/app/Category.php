<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// Explicitely define which table to be used
    protected $table = 'categories';

    // Relationship definition

    public function posts() 
    {
    	// Category has many posts
    	return $this->hasMany('App\Post');

    }
}
