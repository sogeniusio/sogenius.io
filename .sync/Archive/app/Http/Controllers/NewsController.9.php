<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
use App\Tag;

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
        // create variable to store all categories
        $categories = Category::all();

        $tags = Tag::all();

        // grab post from db based on slug
        $posts = Post::all()->groupBy(function($item){ return $item->created_at->format('d-M-y'); });

        $post = Post::where('slug', '=', $slug)->first();

        // return view and pass in post object

        return view('news.post')->withPost($post)->withTags($tags)->withCategories($categories);
    }




}
