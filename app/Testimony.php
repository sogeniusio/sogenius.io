<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
  // Explicitly define which table to be used
  protected $table = 'testimonies';

  protected $fillable = [
    'firstname',
    'lastname',
    'company',
    'email',
    'auth_token',
    'is_complete',
  ];

  public function review()
  {
      return $this->hasOne('App\Review');

  }
}
