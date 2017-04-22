<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Return news posts to blog view

    public function getBlog() {

      return view('news.roll');
    }


}
