<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Album extends Eloquent {
  // Explicit fields for mass assignment.
  protected $fillable = [
    'name', 'year', 'label', 'picture', 'artist_id', 'slug'
  ];
}