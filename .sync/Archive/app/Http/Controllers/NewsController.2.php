<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Return news posts to blog view

    public function getNews() {

      return view('news.roll');
    }


}
