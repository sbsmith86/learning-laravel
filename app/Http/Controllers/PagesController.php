<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

  // Controls the about page.
  public function about() {
    $first = 'Shae';
    $last = 'Breezy';
    // $people = ['Me', 'Her', 'Actually, just me'];
    $people = [];

    // The `compact` function takes existing variables and makes 
    // them into an associative array.
    return view('pages.about', compact('first', 'last', 'people'));
  }

  public function contact() {
    return view('pages.contact');
  }
}
