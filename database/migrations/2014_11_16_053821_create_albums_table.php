<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('albums', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->date('year');
      $table->string('label');
      $table->integer('picture')->unsigned();
      $table->foreign('picture')->references('id')->on('files');
      $table->integer('artist_id')->unsigned();
      $table->foreign('artist_id')->references('id')->on('artists');
      $table->string('slug')->unique();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('albums');
  }

}
