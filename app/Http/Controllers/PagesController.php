<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactForm;
use App\Http\Requests;
use App\Identity;
use App\Project;
use App\Type;
use Session;
use Mail;
use Config;
use View;
use PDF;
use Validator;
use Response;
use Redirect;




use InstagramScraper\Instagram;


class PagesController extends Controller
{

    public function getHome()
    {
        $data['projects'] = Project::orderBy('created_at', 'desc')->limit(10)->get();
        $data['types']= Type::all();
        $identities = Identity::all();
        $data['identities2'] = array();
          foreach ($identities as $identity) {
              $identities2[$identity->id] = $identity->name;
          }
        return View::make('pages.home', $data);

    }

    public function getAbout()
    {
      $data['first_name'] = 'Hosnel';
      $data['last_name'] = 'Guerrier';
      $data['full_name'] = $data['first_name'] . ' ' . $data['last_name'];
      $data['social_media'] = array(
        'fb_page' => 'facebook.com/hosnelg/',
        'fb_fan_page' => 'facebook.com/sogen1us/',
        'ig_page' => 'instagram.com/sogen1us/',
        'tw_page' => 'twitter.com/hosnelg/',
        'gh_[age]' => 'github.com/hosnelg/',
      );
      $data['email'] = 'hi@sogenius.io';

      return View::make('pages.about', $data);

    }

    public function getContact()
    {

        return view('pages.contact');

    }

    public function postContact(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'fullname' => 'required|min:3|max:60',
        'email' => 'required|email',
        'subject' => 'required|min:3|max:60',
        'message' => 'required|min:5',
        // 'g-recaptcha-response' => 'required|captcha'
      ]);

      $data = array(
        'fullname' => $request->fullname,
        'company' => $request->company,
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
      );

      if ($validator -> passes()) {
    
              Mail::to($data['email'])->queue(new ContactForm($data));

              //Redirect to contact page
              return redirect()->back()->with('success', true)->with('message','Your message was successfully sent. Ill be in touch soon');

          } else {
              // data is invalid
              return redirect('/contact')->withErrors($validator);
              // return redirect()->back()->withErrors($validator)->withInput();
    }
  }

      public function getQuote()
      {

        $questions['services'] = array(
          'Accept donations',
          'Update website on your own',
          'E-Commerce',
          'Blog / Magazine / News Articles',
          'Event Calendars',
          'Forum/Message Board',
          'Image or Portfolio Galleries',
          'Membership Registration',
          'Newsletter',
          'Social Network Integration (Facebook, Twitter, etc.)',
          'Search Engine Marketing / Optimization',
          'Web form - Make a Payment',
          'Web form - Quote Request',
          'Video Gallery',
          'Photo Gallery',
          'Other',
        );

        $questions['designitems'] = array(
          'I need a custom Website design layout',
          'I need some Design changes to my Current Website',
          'I need a logo',
          'I need a template/theme customized',
          'I have my own Website design layout (in PSD format)',
          'I have my own logo (high resolution req)',
          'Other',
        );

        $questions['cmses'] = array(
          'Wordpress',
          'Wordpress Multisite',
          'Custom CMS',
          "I Don't Know",
          'Other',
        );

        // dd($questions);

        return View::make('pages.quote', $questions);


      }

      public function postQuote(Request $request)
      {

        $validator = Validator::make($request->all(), [
          'salutation' => '',
          'firstname' => 'required|min:3|max:100',
          'lastname' => 'required|min:3|max:100',
          'suffix' => 'min:3|max:10',
          'email' => 'required|email',
          'phone' => 'required|min:10|max:15',
          'month' => 'required',
          'year' => 'required',
          'budgetrange' => 'required',
          'service' => 'required|array',
          'designitem' => 'required|array',
          'competitors' => 'min:10',
          'registrar' => 'min:3',
          'hosting' => 'min:3',
          'siteneeds' => '',
          'updates' => 'min:3',
          'cms' => '',
          'othercms' => 'min:3',
          'audience' => 'min:10',
        ]);

        $data = array(
          'salutation' => $request->salutation,
          'firstname' => $request->firstname,
          'lastname' => $request->lastname,
          'suffix' => $request->suffix,
          'email' => $request->email,
          'phone' => $request->phone,
          'month' => $request->month,
          'year' => $request->year,
          'budgetrange' => $request->budgetrange,
          'service' => $request->service,
          'designitem' => $request->designitem,
          'competitors' => $request->competitors,
          'registrar' => $request->registrar,
          'hosting' => $request->hosting,
          'siteneeds' => $request->siteneeds,
          'updates' => $request->updates,
          'cms' => $request->cms,
          'othercms' => $request->othercms,
          'audience' => $request->audience,
          'quoteid' => randomString(),
          'created_at' => newYorkTime(),
        );

        $filename = $data['quoteid'] . '-' . time() . '.pdf';

        $data['quote_location'] = storage_path('quotes/' . $filename);
        $data['pdf'] = PDF::loadView('quotes.pdf', $data)->setPaper('letter')->setOrientation('portrait')->setOption('margin-bottom', 0)->save($data['quote_location']);

      }

    }
