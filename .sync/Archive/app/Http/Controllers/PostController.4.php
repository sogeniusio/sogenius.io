<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use App\Tag;

class PostController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // create variable to store all categories
      $categories = Category::all();

      // create variable to store all blog posts

      $posts = Post::orderBy('id', 'desc')->paginate(10);

      return view('admin.posts.index')->withPosts($posts)->withCategories($categories);

      // return a view and pass in the above variable
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
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
              'title'         => 'required|max:255',
              'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
              'category_id'   => 'required|integer',
              'body'          => 'required',
          ));

      // Store in DB
      // Create new post instance
      $post  = new Post;

      // Grab items from form
      $post->title        = $request->title;
      $post->slug         = $request->slug;
      $post->category_id  = $request->category_id;
      $post->body         = Purifier::clean($request->body);

      // Store Featured Images in DB

      if($request->hasFile('feat_image')) {
        // Set feat_img to file in request
        $feat_img   = $request->file('feat_image');
        // Edit file name including extension
        $filename   = 'ftimg' . $post->id . time() . '.' . $feat_img->getClientOriginalExtension();
        // Setup location
        $location   = public_path( '/images/blog/posts/' . $filename );
        // Make image with resize
        Image::make($feat_img)->resize( 800, 500 )->save($location);

        // Store image in DB
        $post->image      = $filename;

      }


      // Save post contents
      $post->save();

      $post->tags()->sync($request->tags, false);

      // set flash data with success message

      Session::flash('success', 'The blog post was successfully created.');

      // redirect to post

      return redirect()->route( 'posts.show', $post->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('admin.posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // find post in db and save in variable
      $post = Post::find($id);

      // find category in db and save in variable
      $categories = Category::all();
      $cats       = array();
      foreach ($categories as $category) {
          $cats[$category->id] = $category->name;
      }

      // find tags in db and save in variable
      $tags  = Tag::all();
      $tags2 = array();
      foreach ($tags as $tag) {
          $tags2[$tag->id] = $tag->name;
      }

      // return the view and pass in variable
      return view('admin.posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);

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
      $post = Post::find($id);

      // if conditional object is different validate all
      if ($request->input('slug') == $post->slug) {
          $this->validate($request, array(
              'title'         => 'required|max:255',
              'category_id'   => 'required|integer',
              'body'          => 'required'
          ));
      } else {
          // else skip conditional object
          $this->validate($request, array(
              'title'     => 'required|max:255',
              'slug'      => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
              'category_id'   => 'required|integer',
              'body'      => 'required'
          ));
      }


      // save data to db

      $post               = Post::find($id);
      $post->title        = $request->input('title');
      $post->slug         = $request->input('slug');
      $post->category_id  = $request->input('category_id');
      $post->body         = Purifier::clean($request->input('body'));

      $post->save();

      if (isset($request->tags)) {
          $post->tags()->sync($request->tags);
      } else {
          $post->tags()->sync(array());
      }


      // set flash data with success message

      Session::flash('success', 'Your changes have been saved successfully!');

      // redirect with flash data to posts.show

      return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // find post item

  $post = Post::find($id);

      // removing associated tags from post

      $post->tags()->detach();

  // delete post item

  $post->delete();

  // flash success message

  Session::flash('success', 'The post was successfully deleted.');

  // return to blog index view

  return redirect()->route('posts.index');
    }
}
