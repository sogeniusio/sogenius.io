<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;

use View;
use SEO;


class NewsController extends Controller
{
    // Return news posts to blog view

    public function getNews()
    {

      // SEO

      SEO::setTitle('News');
      SEO::setDescription('Providing a unique online meeting place to keep up to date on tech and design news, share knowledge and experiences with peers, improve skills with training and educational resources, and, of course, exchange tools, tips and advice.');
      SEO::opengraph()->setUrl(url('/'));
      SEO::setCanonical(url('/news'));
      SEO::opengraph()->addProperty('type', 'articles');
      SEO::twitter()->setSite('@sogeniusio');

      $news['posts'] = Post::orderBy('created_at', 'desc')->limit(4)->get();

      if (count($news['posts']) == 0) {
      } else {
        $news['tags'] = Tag::all();
      }

      return View::make('news.roll', $news);

    }

    public function getPost($slug)
    {

        $news['posts'] = Post::orderBy('created_at', 'desc')->limit(4)->get();

        $news['categories'] = Category::all();

        // if (count($news['posts']) == 0) {

        // } else {
        //   $news['tags'] = Tag::all();
        // }

        // $news['posts_by_date'] = Post::all()->groupBy(function($date) {
        //     return Carbon::parse($date->created_at)->format('Y-m');
        // });

        $news['post'] = Post::where('slug', '=', $slug)->first();

        return View::make('news.post', $news);

    }




}
