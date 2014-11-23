<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Artist extends Eloquent {

  // Explicit fields for mass assignement 
  protected $fillable = [
    'name', 'genre', 'slug'
  ];
}