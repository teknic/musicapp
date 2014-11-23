<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Artist extends Eloquent {

  // Explicit fields for mass assignment.
  protected $fillable = [
    'name', 'genre', 'slug'
  ];
}