<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Album;

class AlbumTableSeeder extends Seeder {

  public function run()
  {
    // Allow mass assignment.
    Eloquent::unguard();
    // Delete all data.
    DB::table('albums')->delete();
    // Create the following.
    Album::create(array('name' => 'Dr Dre', 'year' => 'Rap', 'label' => 'dr_dre', 'picture' => '123', 'artist_id' => '123', 'slug' => 'album_slug'));
  }

}