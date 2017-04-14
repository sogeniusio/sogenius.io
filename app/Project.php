<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  // Explicitly define which table to be used
  protected $table = 'projects';

  protected $fillable = [
    'title',
    'overview',
    'description',
    'slug',
    'display_image',
    'feat_image1',
    'feat_image2',
    'feat_image3',
    'type_id',
  ];

  public function type()
  {
      // Defines relationship
      return $this->belongsTo('App\Type');

  }
  public function identities()
  {
      // Defines relationship
      return $this->belongsToMany('App\Identity');

  }
}
