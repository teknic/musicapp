<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Album extends Eloquent {
  // Explicit fields for mass assignment.
  protected $fillable = [
    'name',
    'year',
    'label',
    'picture',
    'artist_id',
    'slug'
  ];

  public function song() {
    return $this->hasMany('App\Models\Song', 'album_id');
  }

  public function picture() {
    return $this->hasOne('App\Models\Files', 'picture_id');
  }
}