<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Artist extends Eloquent {

  // Explicit fields for mass assignment.
  protected $fillable = [
    'name', 'genre', 'slug'
  ];

  public function album()
  {
    return $this->hasMany('App\Models\Album', 'artist_id', 'id');
  }
}