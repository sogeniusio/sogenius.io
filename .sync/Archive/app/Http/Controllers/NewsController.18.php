<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;


class NewsController extends Controller
{
    // Return news posts to blog view

    public function getNews()
    {

        $tags = Tag::all();

        //grab posts from db in descending order

        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();


        // return blog page view

        return view('news.roll')->withPosts($posts)->withTags($tags);
    }

    public function getPost($slug)
    {

        // create variable to store all archived posts
        $latestPosts       = Post::orderBy('created_at', 'desc')->limit(4)->get();

        // create variable to store all categories
        $categories    = Category::all();

        // create variable to store all posts based on their creation date -- archival
        $posts_by_date = Post::all()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y-m');
        });

        // grab post from db based on slug

        $post          = Post::where('slug', '=', $slug)->first();

        $tags          = Tag::all();

        // return view and pass in post object

        return view('news.post')
          ->withPost($post)
          ->withTags($tags)
          ->withCategories($categories)
          ->withLatestPosts($latestPosts);
    }




}
