<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // defines relationship
    public function post()
    {
    	return $this->belongsTo('App\Post');
    }
}
