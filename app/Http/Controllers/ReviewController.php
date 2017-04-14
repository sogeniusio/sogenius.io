<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Testimony;
use Session;
use View;
use Response;
use Validator;


class ReviewController extends Controller
{
  /**
  * Custom parameters.
  *
  * @var \Symfony\Component\HttpFoundation\ParameterBag
  *
  * @api
  */
  public $attributes;

  // public function __construct()
  // {
  //   $this->middleware('checklink');
  // }

  public function getReview(Request $request) {

    $data['testimony'] = $request->get('testimony');

    return View::make('pages.review', $data);

  }

  public function postReview(Request $request)
  {

    $validator = Validator::make($request->all(), [

      'firstname'   => 'required|min:2|max:55',
      'lastname'   => 'required|min:2|max:55',
      'facebook'    => 'max:100',
      'instagram'   => 'max:100',
      'twitter'     => 'max:100',
      'q1'          => 'max:255',
      'q2'          => 'max:255',
      'q3'          => 'max:255',
      'q4'          => 'max:255',
      'comments'    => 'required|max:455',
      'agree'       => 'required_with_all',
      'g-recaptcha-response' => 'required|captcha',
      'tm_id'       => 'required'

    ]);

    if ($validator -> passes()) {

      $review = new Review;

      $review->firstname    = $request->firstname;
      $review->lastname     = $request->lastname;
      $review->facebook     = $request->facebook;
      $review->instagram    = $request->instagram;
      $review->twitter      = $request->twitter;
      $review->q1           = $request->q1;
      $review->q2           = $request->q2;
      $review->q3           = $request->q3;
      $review->q4           = $request->q4;
      $review->comments     = $request->comments;
      
      $testimony = Testimony::find($request->tm_id)->first()->delete();

      $review->save();

      //Redirect to contact page
      return redirect()->back()->with('success', true)->with('message','Thank you for submitting your review!');

      } else {
      // data is invalid
      return redirect()->back()->withErrors($validator)->withInput();
    }

  }
}
