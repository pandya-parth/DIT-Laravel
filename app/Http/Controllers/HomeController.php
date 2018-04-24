<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Former;
use App\User;
use Hash;
use Mail;

class HomeController extends Controller
{
	// Method for submit form
    public function submit_form(Request $request)
    {
    	// Rules for validate data
    	$rules = ['name' => 'required',
    				'email' => 'required|email|unique:users',
    				'phone' => 'required|numeric'];

    	// Messages for data validation
    	$messages = ['name.required' => 'Please enter your name.',
    				'email.required' => 'Please enter your email address.',
    				'email.email' => 'Please enter email in proper format.',
    				'phone.required' => 'Please enter your phone number.',
    				'phone.numeric' => 'Please enter only numbers.',];

    	// If validator fails than return back with error messages
    	$validator = Validator::make($request->all(),$rules,$messages);
	    if ($validator->fails()) { 
	      Former::withErrors($validator);
	      return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Please correct following errors.');
	    }
        // If validator passes than new User instance will be save in database
	    try
        {
	      $pass = str_random(8);
	      $user = New User;
	      $user->name=$request->get('name');
	      $user->email= $request->get('email');
	      $user->phone=$request->get('phone');
	      $user->password = Hash::make($pass);
	      $user->save();

	      // Send welcome mail to user
	      Mail::send('emails.welcome', ['user' => $user, 'pass' => $pass], function($message) use($user) {
                        $message->from('nicolecross1579@gmail.com', 'DIT');
                        $message->to($user->email);
                        $message->subject('Thank you for submitting your details');
                        });

	      // After success redirect back
	      return redirect()->back()->with('success', "We really appreciate you giving us a moment of your time today. Our representative will get back to you shortly with a reply.");
        }
        catch(\Exception $e)
        {
          return redirect()->back()->with('error', 'Something went wrong, Please try after sometime.');
        } 
    }
}