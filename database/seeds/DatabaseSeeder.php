<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;

class DatabaseSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    Eloquent::unguard();

    $this->call('FileTableSeeder');
    $this->call('ArtistTableSeeder');
    $this->call('AlbumTableSeeder');
    $this->call('SongTableSeeder');
    $this->call('UserTableSeeder');
  }

}
