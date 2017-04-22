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
        $firstname = 'Hosnel';
        $lastname = 'Guerrier';

        $fullname = $firstname . " " . $lastname;
        $email = 'hi@sogenius.io';
        $data = [];
        $data['email'] = $email;
        $data['fullname']= $fullname;
        return view('pages.about')->withData($data);

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
