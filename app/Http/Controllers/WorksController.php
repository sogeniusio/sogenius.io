<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;
use App\Type;
// use App\Tag;
use Carbon\Carbon;

class WorksController extends Controller
{
    // Return news projects to blog view

    public function getWorks()
    {

        // $tags = Tag::all();

        //grab projects from db in descending order

        // create variable to store all types
        $types = Type::all();

        $projects = Project::orderBy('created_at', 'desc')->limit(4)->get();


        // return blog page view

        return view('works.list')->withProjects($projects)->withTypes($types);
        // ->withTags($tags);
    }

    public function getProject($slug)
    {

        // create variable to store all latest projects
        $projects = Project::orderBy('created_at', 'desc')->limit(4)->get();

        // create variable to store all types
        $types = Type::all();
        //
        // $tags = Tag::all();

        // grab all projects and arrange in array -- archival
        $projects_by_date = Project::all()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y-m');
        });

        $project = Project::where('slug', '=', $slug)->first();

        // return view and pass in post object

        return view('works.project')->withProject($project)->withProjects($projects)->withProjectsByDate($projects_by_date)->withTypes($types);
        // ->withTags($tags);
    }




}
