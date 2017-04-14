<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  // Explicitly define which table to be used
  protected $table = 'projects';

  protected $fillable = [
    'firstname',
    'lastname',
    'facebook',
    'instagram',
    'twitter',
    'q1',
    'q2',
    'q3',
    'q4',
    'comments',
    'testimony_id',
  ];

  public function testimony()
  {
      return $this->belongsTo('App\Testimony');

  }
}
