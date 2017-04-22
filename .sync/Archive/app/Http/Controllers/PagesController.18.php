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
        $data['myEmail'] = $email;
        $data['myFullName']= $fullname;
        return view('pages.about')->withData($data);

    }

    public function getContact()
    {

        return view('pages.contact');

    }
    public function postContact(Request $request)
    {

      $this->validate($request, [
        'fullname' => 'required|min:3|max:60',
        'email' => 'required|email',
        'subject' => 'required|min:3|max:60',
        'message' => 'required|min:3'
      ]);

      $data = array(
        'fullname' => $request->fullname,
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
      );

      Mail::send('emails.contact', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('hi@sogenius.io');
        $message->subject($data['subject']);

        return redirect()->url('contact')->with('message', "Thanks, message has been sent");;
      });
    }
}
