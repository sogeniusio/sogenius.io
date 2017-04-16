<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ReviewRequest;
use App\Http\Requests;
use App\Http\Controllers;
use App\Testimony;
use Session;
use Mail;
use Purifier;
use Storage;
use Validator;
use Response;


class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $testimonies = Testimony::orderBy('id', 'desc')->paginate(10);
      return view('admin.testimonies.index')->withTestimonies($testimonies);
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
      $validator = Validator::make($request->all(), [
        'firstname' => 'required|max:100',
        'lastname' => 'required|max:100',
        'company' => 'max:100',
        'email' => 'required|max:150|email'
      ]);

      $data = array(
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'company' => $request->company,
        'email' => $request->email
      );

      $data['token'] = sha1(uniqid($data['email'], true));
      $data['url'] = url('/') . '/review' . '?auth_token=' . $data['token'] ;

      dd($data);

      if ($validator->passes()) {

        // create new testimony instance
        $testimony = new Testimony;

        $testimony->firstname = $request->firstname;
        $testimony->lastname = $request->lastname;
        $testimony->company = $request->company;
        $testimony->email = $request->email;
        $testimony->auth_token = $data['token'];
        $testimony->save();


        // then send email to reviewer
        // Mail::send('emails.reviewrequest', $data, function($message) use ($data){
        //   $message->from('quotes@sogenius.io');
        //   $message->to($data['email']);
        //   $message->subject("We'd love to hear from you!");
        // });
        Mail::to($data['email'])->queue(new ReviewRequest($data));

        Session::flash('success', 'The review request was successfully sent.');

        // redirect to index
        return redirect()->route('testimonies.index');

      } else {
          // data is invalid
          return redirect()->route('testimonies.create')->withErrors($validator);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimony = Testimony::findOrFail($id);
        $testimony->delete();

        return make::view('testimonies.index');

    }
}
