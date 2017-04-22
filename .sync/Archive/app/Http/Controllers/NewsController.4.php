<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Category;
use App\Tag;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Return news posts to blog view

    public function getNews() {

      $tags = Tag::all();

		//grab posts from db in descending order

		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();

		// return blog page view

      return view('news.roll')->withPosts($posts)->withTags($tags);
    }


}
