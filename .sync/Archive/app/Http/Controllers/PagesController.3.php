<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
Use Session;
use Mail;


class PagesController extends Controller
{
    // Controlls all static page data

    public function getHome()
    {

        return view('pages.home');

    }

    public function getAbout()
    {

        return view('pages.about');

    }

    public function getContact()
    {

        return view('pages.contact');

    }
    public function postContact(Request $request)
    {

      $this->validate($request)
    }
}
