<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    // Returns admin area view
    public function getAdmin() {
    ;
      return view('admin.static.pages');
    }
    // // Returns admin area view
    // public function getAdminArea() {
    //
    //   return view('admin.post.create');
    // }
}
