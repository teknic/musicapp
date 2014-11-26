<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Artist;
use App\Models\Files;

class FileTableSeeder extends Seeder {

  public function run()
  {
    // Allow mass assignment.
    Eloquent::unguard();
    // Delete all data.
    DB::table('files')->delete();

    // Get all artists with albums
    $artists = array(
      'dr_dre',
      'snoop_dogg',
      'nas',
      'eminem',
      'living_legends',
      'hieroglyphics',
      'souls_of_mischief',
      'optimus_rhymes',
      'system_of_a_down',
      'serj_tankian'
    );
    $path = '/storage/album_covers/';
    $artist_path = '/storage/artists/';
    foreach ($artists as $artist) {
      switch ($artist) {
        case 'dr_dre':
          Files::create(
            array(
              'filename' => 'TheChronic.jpg',
              'location' => $path . 'TheChronic.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '12000',
            )
          );
          Files::create(
            array(
              'filename' => '2001.jpg',
              'location' => $path . '2001.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '3000',
            )
          );
          Files::create(
            array(
              'filename' => 'drdre.jpg',
              'location' => $artist_path . 'drdre.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '18000',
            )
          );
          break;
        case 'snoop_dogg':
          Files::create(
            array(
              'filename' => 'Doggystyle.jpg',
              'location' => $path . 'Doggystyle.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '26000',
            )
          );
          Files::create(
            array(
              'filename' => 'Tha-doggfather.jpg',
              'location' => $path . 'Tha-doggfather.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '14000',
            )
          );
          Files::create(
            array(
              'filename' => 'snoopdogg.jpg',
              'location' => $artist_path . 'snoopdogg.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '64000',
            )
          );
          break;
        case 'nas':
          Files::create(
            array(
              'filename' => 'Illmatic.jpg',
              'location' => $path . 'Illmatic.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '13000',
            )
          );
          Files::create(
            array(
              'filename' => 'it-was-written.jpg',
              'location' => $path . 'it-was-written.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '12000',
            )
          );
          Files::create(
            array(
              'filename' => 'nas.jpg',
              'location' => $artist_path . 'nas.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '91000',
            )
          );
          break;
        case 'eminem':
          Files::create(
            array(
              'filename' => 'The_Slim_Shady_LP.jpg',
              'location' => $path . 'The_Slim_Shady_LP.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '17000',
            )
          );
          Files::create(
            array(
              'filename' => 'The_Marshall_Mathers_LP.jpg',
              'location' => $path . 'The_Marshall_Mathers_LP.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '18000',
            )
          );
          Files::create(
            array(
              'filename' => 'eminem.jpg',
              'location' => $artist_path . 'eminem.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '24000',
            )
          );
          break;
        case 'living_legends':
          Files::create(
            array(
              'filename' => 'Almost_Famous.jpg',
              'location' => $path . 'Almost_Famous.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '20000',
            )
          );
          Files::create(
            array(
              'filename' => 'Creativecover.jpg',
              'location' => $path . 'Creativecover.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '25000',
            )
          );
          Files::create(
            array(
              'filename' => 'livinglegends.jpg',
              'location' => $artist_path . 'livinglegends.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '12000',
            )
          );
          break;
        case 'souls_of_mischief':
          Files::create(
            array(
              'filename' => '93tillinfinity.jpg',
              'location' => $path . '93tillinfinity.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '11000',
            )
          );
          Files::create(
            array(
              'filename' => 'Focus.jpg',
              'location' => $path . 'Focus.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '52000',
            )
          );
          Files::create(
            array(
              'filename' => 'soulsofmischief.jpg',
              'location' => $artist_path . 'soulsofmischief.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '59000',
            )
          );
          break;
        case 'hieroglyphics':
          Files::create(
            array(
              'filename' => 'Third_Eye_Vision.jpg',
              'location' => $path . 'Third_Eye_Vision.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '17000',
            )
          );
          Files::create(
            array(
              'filename' => 'Full_Circle.jpg',
              'location' => $path . 'Full_Circle.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '10000',
            )
          );
          Files::create(
            array(
              'filename' => 'hieroglyphics.jpg',
              'location' => $artist_path . 'hieroglyphics.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '90000',
            )
          );
          break;
        case 'optimus_rhymes':
          Files::create(
            array(
              'filename' => 'fourcast.jpg',
              'location' => $path . 'fourcast.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '8000',
            )
          );
          Files::create(
            array(
              'filename' => 'state_of_the_art.jpg',
              'location' => $path . 'state_of_the_art.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '339000',
            )
          );
          Files::create(
            array(
              'filename' => 'optimusrhymes.jpg',
              'location' => $artist_path . 'optimusrhymes.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '159000',
            )
          );
          break;
        case 'system_of_a_down':
          Files::create(
            array(
              'filename' => 'Toxicity.jpg',
              'location' => $path . 'Toxicity.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '20000',
            )
          );
          Files::create(
            array(
              'filename' => 'Mezmerize.jpg',
              'location' => $path . 'Mezmerize.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '10000',
            )
          );
          Files::create(
            array(
              'filename' => 'systemofadown.jpg',
              'location' => $artist_path . 'systemofadown.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '124000',
            )
          );
          break;
        case 'serj_tankian':
          Files::create(
            array(
              'filename' => 'Elect_The_Dead.jpg',
              'location' => $path . 'Elect_The_Dead.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '16000',
            )
          );
          Files::create(
            array(
              'filename' => 'Imperfect_Harmonies.jpg',
              'location' => $path . 'Imperfect_Harmonies.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '80000',
            )
          );
          Files::create(
            array(
              'filename' => 'serjtankian.jpg',
              'location' => $artist_path . 'serjtankian.jpg',
              'filemime' => 'image/jpeg',
              'filesize' => '77000',
            )
          );
          break;
      }
    }
  }
}