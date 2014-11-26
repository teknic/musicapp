<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Artist;
use App\Models\Files;

class ArtistTableSeeder extends Seeder {

  public function run()
  {
    // Allow mass assignment.
    Eloquent::unguard();
    // Delete all data.
    DB::table('artists')->delete();
    // Create the following.
    $file = Files::where('filename', '=', 'drdre.jpg')->first();
    Artist::create(array('name' => 'Dr Dre', 'genre' => 'Rap', 'slug' => 'dr_dre', 'picture' => $file->id));

    $file = Files::where('filename', '=', 'snoopdogg.jpg')->first();
    Artist::create(array('name' => 'Snoop Dogg', 'genre' => 'Rap', 'slug' => 'snoop_dogg', 'picture' => $file->id));

    $file = Files::where('filename', '=', 'nas.jpg')->first();
    Artist::create(array('name' => 'Nas', 'genre' => 'Rap', 'slug' => 'nas', 'picture' => $file->id));

    $file = Files::where('filename', '=', 'eminem.jpg')->first();
    Artist::create(array('name' => 'Eminem', 'genre' => 'Rap', 'slug' => 'eminem', 'picture' => $file->id));

    $file = Files::where('filename', '=', 'livinglegends.jpg')->first();
    Artist::create(array('name' => 'Living Legends', 'genre' => 'Hip Hop', 'slug' => 'living_legends', 'picture' => $file->id));

    $file = Files::where('filename', '=', 'soulsofmischief.jpg')->first();
    Artist::create(array('name' => 'Souls of Mischief', 'genre' => 'Hip Hop', 'slug' => 'souls_of_mischief', 'picture' => $file->id));

    $file = Files::where('filename', '=', 'optimusrhymes.jpg')->first();
    Artist::create(array('name' => 'Optimus Rhymes', 'genre' => 'Hip Hop', 'slug' => 'optimus_rhymes', 'picture' => $file->id));

    $file = Files::where('filename', '=', 'hieroglyphics.jpg')->first();
    Artist::create(array('name' => 'Hieroglyphics', 'genre' => 'Hip Hop', 'slug' => 'hieroglyphics', 'picture' => $file->id));

    $file = Files::where('filename', '=', 'systemofadown.jpg')->first();
    Artist::create(array('name' => 'System of a Down', 'genre' => 'Alternative Metal', 'slug' => 'system_of_a_down', 'picture' => $file->id));

    $file = Files::where('filename', '=', 'serjtankian.jpg')->first();
    Artist::create(array('name' => 'Serj Tankian', 'genre' => 'Alternative Metal', 'slug' => 'serj_tankian', 'picture' => $file->id));
  }

}