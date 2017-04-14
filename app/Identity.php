<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
  // Explicitly define which table to be used
  protected $table = 'identities';

  protected $fillable = [
    'name',
  ];

  public function projects()
  {
      return $this->belongsToMany('App\Project', 'identity_project', 'identity_id', 'project_id');
  }}
