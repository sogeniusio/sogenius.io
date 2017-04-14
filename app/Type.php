<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  // Explicitly define which table to be used
  protected $table = 'types';

  protected $fillable = [
    'name',
  ];
  // Relationship definition
  public function projects()
  {

      // Category has many posts
      return $this->hasMany('App\Project');

  }}
