<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Return news posts to blog view

    public function getBlog() {

      return view('news.roll');
    }


}
