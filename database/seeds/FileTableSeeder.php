<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Files;

class FileTableSeeder extends Seeder {

  public function run()
  {
    // Allow mass assignment.
    Eloquent::unguard();
    // Delete all data.
    DB::table('files')->delete();

    // Get all artists with albums
    $artists = Artist::with('album')->get();
    foreach ($artists as $artist) {
      switch ($artist->slug) {
        case 'dr_dre':
          break;
        case 'snoop_dogg':
          break;
        case 'nas':
          break;
        case 'eminem':
          break;
        case 'living_legends':
          break;
        case 'souls_of_mischief':
          break;
        case 'hieroglyphics':
          break;
        case 'optimus_rhymes':
          break;
        case 'system_of_a_down':
          break;
        case 'serj_tankian':
          break;

      }
    }
  }
}