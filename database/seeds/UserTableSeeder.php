<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\User;

class UserTableSeeder extends Seeder {

  public function run()
  {
    // Allow mass assignment.
    Eloquent::unguard();
    // Delete all data.
    DB::table('users')->delete();
    // Create the following.
    User::create(array(
      'email' => 'btate340@gmail.com',
      'password' => Hash::make('123')
    ));
  }

}