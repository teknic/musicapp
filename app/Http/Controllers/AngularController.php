<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AngularController extends Controller {

  /**
   * Returns the angular index.php file.
   *
   * @return mixed
   */
  public function index() {
    return view('music.index');
  }

}
