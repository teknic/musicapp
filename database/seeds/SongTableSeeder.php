<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Song;

class SongTableSeeder extends Seeder {

  public function run()
  {
    // Allow mass assignment.
    Eloquent::unguard();
    // Delete all data.
    DB::table('songs')->delete();
    // Create the following.
    Song::create(array('name' => 'Dr Dre', 'genre' => 'Rap', 'slug' => 'dr_dre'));
  }

}