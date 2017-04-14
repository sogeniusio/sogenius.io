<?php

namespace App\Http\Controllers;

use Redirect;

use App\Post;
use App\Project;


use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Returns admin area view
    public function getAdmin()
    {
        $posts = Post::all();
        $projects = Project::all();
        return view('admin.dashboard2')->withPosts($posts)->withProjects($projects);
    }

    public function getStatus()
    {
        return Redirect::to(url('/basic-status'));

        
    }
}