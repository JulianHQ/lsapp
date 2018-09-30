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
    $title = 'Welcome to Laravel!';

    // return view('pages.index', compact('title'));
    return view('pages.index')->with('title', $title);
  }

  /**
   * Displays the About Page
   */
  public function about() {
    $title = 'About Us';
    return view('pages.about')->with('title', $title);
  }

  /**
   * Displays the Services Page
   */
  public function services() {
    $data = array(
      'title'    => 'Services',
      'services' => ['Web Design', 'Programming', 'SEO']
    );

    return view('pages.services')->with($data);
  }
}
