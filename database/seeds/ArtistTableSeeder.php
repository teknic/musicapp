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
    Artist::create(array('name' => 'Nas', 'genre' => 'Rap', 'slug' => 'nas'));
    Artist::create(array('name' => 'Eminem', 'genre' => 'Rap', 'slug' => 'eminem'));
    Artist::create(array('name' => 'Living Legends', 'genre' => 'Hip Hop', 'slug' => 'living_legends'));
    Artist::create(array('name' => 'Souls of Mischief', 'genre' => 'Hip Hop', 'slug' => 'souls_of_mischief'));
    Artist::create(array('name' => 'Optimus Rhymes', 'genre' => 'Hip Hop', 'slug' => 'optimus_rhymes'));
    Artist::create(array('name' => 'Hieroglyphics', 'genre' => 'Hip Hop', 'slug' => 'hieroglyphics'));
    Artist::create(array('name' => 'System of a Down', 'genre' => 'Alternative Metal', 'slug' => 'system_of_a_down'));
    Artist::create(array('name' => 'Serj Tankian', 'genre' => 'Alternative Meta', 'slug' => 'serj_tankian'));
  }

}