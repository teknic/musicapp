<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Artist;

class ArtistTableSeeder extends Seeder {

  public function run()
  {
    // Allow mass assignment.
    Eloquent::unguard();
    // Delete all data.
    DB::table('artists')->delete();
    // Create the following.
    Artist::create(array('name' => 'Dr Dre', 'genre' => 'Rap', 'slug' => 'dr_dre'));
    Artist::create(array('name' => 'Snoop Dogg', 'genre' => 'Rap', 'slug' => 'snoop_dogg'));
  }

}