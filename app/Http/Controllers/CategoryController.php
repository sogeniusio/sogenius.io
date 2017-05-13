<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Post;
use Session;
use View;

class CategoryController extends Controller
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
        $data['categories'] = Category::all();

        return View::make('admin.categories.index', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255'
        ));
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        Session::flash('success', 'A new category has successfull been created!');

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //   $category = Category::find($id);
    //   Post::whereCategoryId($id)->update(['category_id' => null]);
    //   $category->delete();
    //   Session::flash('success', 'The tag was successfully deleted.');

    //   return redirect()->route('categories.index');
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // Category::destroy($request->categories); 
        // $category = Category::find($id);
    // Category::find(explode(',', $id))->delete();
    $category_set = Category::destroy($request->categories); 
    
    Post::whereCategoryId($category_set)->update(['category_id' => null]);
    
    return back();


        // $category->delete();

        // return back();
        // $category = Category::find($id);
        // Post::whereCategoryId($id)->update(['category_id' => null]);
        // $category->delete();
        // Session::flash('success', 'The tag was successfully deleted.');

        // return redirect()->route('categories.index');
    }
}
