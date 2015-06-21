<?php

namespace App\Http\Controllers;

use App\Session;
use App\Measure;

class MeasureController extends Controller {
  public function index() {
    $sessions = Session();
    $measures = Measure::where();
  }
}