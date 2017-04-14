<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers;
use App\Project;
use App\Identity;
use App\Type;
use Session;
use Purifier;
use Image;
use Storage;
use File;



class ProjectController extends Controller
{

    // AUTH MIDDLEWARE

    public function __construct()
    {
        $this->middleware('auth');
    }

    // END AUTH MIDDLEWARE

    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      // create variable to store all projects
      $types = Type::all();
      $projects = Project::orderBy('id', 'desc')->paginate(10);

      // return a view and pass in the above variable
      return view('admin.projects.index')->withProjects($projects)->withTypes($types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $types = Type::all();
      $identities = Identity::all();

      return view('admin.projects.create')->withTypes($types)->withIdentities($identities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate my data
      $this->validate($request, array(
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:projects,slug',
          'overview' => 'required|max:180',
          'type_id' => 'required|integer',
          'description' => 'required',
          'feat_image1' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg|max:4000',
          'feat_image2' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg|max:4000',
          'feat_image3' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg|max:4000'
      ));

      // Store in DB
      // Create new project instance
      $project = new Project;

      // Grab items from form
      $project->title = $request->title;
      $project->slug = $request->slug;
      $project->overview = $request->overview;
      $project->type_id = $request->type_id;
      $project->description = Purifier::clean($request->description);

      // Store Featured Images in DB

      if ($request->hasFile('feat_image1')) {
          // Set feat_img to file in request
          $feat_img1 = $request->file('feat_image1');
          // Edit file name including extension
          $filename = 'PROJ' . '-ftimg1_' . time() . '.' . $feat_img1->getClientOriginalExtension();
          // Setup location
          $location = public_path('storage/uploads/projects/' . $filename);
          // Make image with resize
          Image::make($feat_img1)->resize(1167, 671)->save($location);

          // Store image in DB
          $project->feat_image1 = $filename;

      }
      if ($request->hasFile('feat_image2')) {
          // Set feat_img to file in request
          $feat_img2 = $request->file('feat_image2');
          // Edit file name including extension
          $filename = 'PROJ' . '-ftimg2_' . time() . '.' . $feat_img2->getClientOriginalExtension();
          // Setup location
          $location = public_path('storage/uploads/projects/' . $filename);
          // Make image with resize
          Image::make($feat_img2)->resize(1167, 671)->save($location);

          // Store image in DB
          $project->feat_image2 = $filename;
      }
      if ($request->hasFile('feat_image3')) {
          // Set feat_img to file in request
          $feat_img3 = $request->file('feat_image3');
          // Edit file name including extension
          $filename = 'PROJ' . '-ftimg3_' . time() . '.' . $feat_img3->getClientOriginalExtension();
          // Setup location
          $location = public_path('storage/uploads/projects/' . $filename);
          // Make image with resize
          Image::make($feat_img3)->resize(1167, 671)->save($location);

          // Store image in DB
          $project->feat_image3 = $filename;
      }


      // Save project contents
      $project->save();

      $project->identities()->sync($request->identities);

      // set flash data with success message

      Session::flash('success', 'The project was successfully created.');

      // redirect to project

      return redirect()->route('projects.show', $project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $project = Project::find($id);
      return view('admin.projects.show')->withProject($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // find project in db and save in variable
      $project = Project::find($id);

      // find type in db and save in variable
      $types = Type::all();
      $typ = array();
      foreach ($types as $type) {
          $typ[$type->id] = $type->name;
      }

      // find identities in db and save in variable
      $identities = Identity::all();
      $identities2 = array();
      foreach ($identities as $identity) {
          $identities2[$identity->id] = $identity->name;
      }

      // return the view and pass in variable
      return view('admin.projects.edit')->withProject($project)->withTypes($typ)->withIdentities($identities2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // pull conditional object from database
      $project = Project::find($id);

      $this->validate($request, array(
          'title' => 'required|max:255',
          'overview' => 'required',
          'slug' => "required|alpha_dash|min:5|max:255|unique:projects,slug,$id",
          'type_id' => 'required|integer',
          'description' => 'required',
          'feat_image1' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg|max:4000',
          'feat_image2' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg|max:4000',
          'feat_image3' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg|max:4000'
        ));


      // save data to db

      $project = Project::find($id);

      $project->title = $request->input('title');
      $project->overview = $request->input('overview');
      $project->slug = $request->input('slug');
      $project->type_id = $request->input('type_id');
      $project->description = Purifier::clean($request->input('description'));

      // if ($equest->)

      if ($request->hasFile('feat_image1')) {

      // add the new photo
        // Set feat_img to file in request
        $feat_img1 = $request->file('feat_image1');
        // Edit file name including extension
        $filename = 'PROJ' . '-ftimg1_' . time() . '.' . $feat_img1->getClientOriginalExtension();
        // Setup location
        $location = public_path('storage/uploads/projects/' . $filename);
        // Make image with resize
        Image::make($feat_img1)->save($location); // no resize
        // Image::make($feat_img1)->resize(1167, 671)->save($location);
        $oldFilename = $project->feat_img1;
      // update the db
        $project->feat_image1 = $filename;

      // delete the old photo
        Storage::delete($oldFilename);

      }
      if ($request->hasFile('feat_image2')) {

      // add the new photo
        // Set feat_img to file in request
        $feat_img2 = $request->file('feat_image2');
        // Edit file name including extension
        $filename = 'PROJ' . '-ftimg2_' . time() . '.' . $feat_img2->getClientOriginalExtension();
        // Setup location
        $location = public_path('storage/uploads/projects/' . $filename);
        // Make image with resize
        Image::make($feat_img2)->save($location); // no resize
        // Image::make($feat_img2)->resize(1167, 671)->save($location);
        $oldFilename = $project->feat_img2;
      // update the db
        $project->feat_image2 = $filename;

      // delete the old photo
        Storage::delete($oldFilename);

      }
      if ($request->hasFile('feat_image3')) {

      // add the new photo
        // Set feat_img to file in request
        $feat_img3 = $request->file('feat_image3');
        // Edit file name including extension
        $filename = 'PROJ' . '-ftimg3_' . time() . '.' . $feat_img3->getClientOriginalExtension();
        // Setup location
        $location = public_path('storage/uploads/projects/' . $filename);
        // Make image with resize
        Image::make($feat_img3)->save($location); // no resize
        // Image::make($feat_img3)->resize(1167, 671)->save($location);
        $oldFilename = $project->feat_img3;
      // update the db
        $project->feat_image3 = $filename;

      // delete the old photo
        Storage::delete($oldFilename);

      }
      $project->save();
      //
      // if (isset($request->identities)) {
      //     $project->identities()->sync($request->identities);
      // } else {
      //     $project->identities()->sync(array());
      // }

      $project->identities()->sync($request->get('identities', []));
      // $broadcast->broadcastmedias()->sync($request->get('broadcastmedia', []))



      // set flash data with success message

      Session::flash('success', 'Your changes have been saved successfully!');

      // redirect with flash data to projects.show

      return redirect()->route('projects.show', $project->id);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // find project item

      $project = Project::find($id);

      // removing associated identities from project

      $project->identities()->detach();

      // remove associated Images
      // Storage::delete($project->feat_image1);
      // Storage::delete($project->feat_image2);
      // Storage::delete($project->feat_image3);

      if (File::exists($project->feat_image1)) {
          Storage::delete($project->feat_image1);
      } else if (File::exists($project->feat_image2)) {
        Storage::delete($project->feat_image2);
      } else if (File::exists($project->feat_image3)) {
        Storage::delete($project->feat_image3);
      }

      // $feat_images = array(exists($project->feat_image1), exists($project->feat_image2), exists($project->feat_image3));
      // File::delete($feat_images);
      // Storage::delete($project->feat_image1, $project->feat_image2, $project->feat_image3);


      // delete project item

      $project->delete();

      // flash success message

      Session::flash('success', 'The project was successfully deleted.');

      // return to blog index view

      return redirect()->route('projects.index');    }
}
