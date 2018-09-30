<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Handles the display of the pages within the application
 */
class PagesController extends Controller
{
  /**
   * Displays the Index Page
   */
  public function index() {
    return view('pages.index');
  }

  /**
   * Displays the About Page
   */
  public function about() {
    return view('pages.about');
  }

  /**
   * Displays the Services Page
   */
  public function services() {
    return view('pages.services');
  }
}
