<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Song extends Eloquent {
  // Explicit fields for mass assignment.
  protected $fillable = [
    'title', 'lyrics', 'length', 'video_link', 'album_id', 'slug'
  ];
}