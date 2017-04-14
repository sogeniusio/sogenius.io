<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Identity;
use Session;

class IdentityController extends Controller
{

  /**
   *
   * Pass all requests through authentication middleware (guest)
   *
   */

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
      $identities = Identity::all();
      return view('admin.identities.index')->withIdentities($identities);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array('name' => 'required|max:255'));
      $identities = new Identity;
      $identities->name = $request->name;
      $identities->save();

      Session::flash('success', 'A new project identity was successfully created!');

      return redirect()->route('identities.index');      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $identity = Identity::find($id);
      return view('admin.identities.show')->withIdentity($identity);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $identity = Identity::find($id);
      return view('admin.identities.edit')->withIdentity($identity);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $identity = Identity::find($id);
      $this->validate($request, ['name' => 'required|max:255']);

      $identity->name = $request->name;

      $identity->save();

      Session::flash('success', 'Your project identity has successfully been updated!');

      return redirect()->route('identities.show', $identity->id);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // find identity in db by id

      $identity = Identity::find($id);

      // if a identity is deleted -> detatch from post

      $identity->posts()->detach();

      // delete post item

      $identity->delete();

      // flash success message

      Session::flash('success', 'The project identity was successfully deleted.');

      // return to blog index view

      return redirect()->route('identities.index');    }
}
