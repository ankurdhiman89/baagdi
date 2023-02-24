<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Session;


class HomeController extends Controller
{
    /**
     * Show the application frontend home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('frontend.index');
    }
    public function get_a_free_quote(Request $request)
    {
    	Session::put('imageName', '');
	 	if ($request->hasFile('file')) {

	    	$request->validate([
	            'file' => 'mimes:png,jpg,jpeg|max:100'
	        ]);

	        $imageName = time().'.'.$request->file->extension();
        	$request->file->move(public_path('upload_image_get_a_free_quote'), $imageName);
    		Session::put('imageName', $imageName);
	    }

    	
    	$name = $request->name;
    	$email = $request->email;
    	$whatsapp = $request->whatsapp;
    	$selectservice = $request->selectservice;
    	$message_1 = $request->message;

    	$data = array('name'=>$name,'email'=>$email,'whatsapp'=>$whatsapp,'selectservice'=>$selectservice,'message_1'=>$message_1);

   		Mail::send(['text'=>'frontend.emails.get_free_quote'], $data, function($message) {
	        $to = 'ankur.baagdisolutions@gmail.com';
	        $subject = 'Get a Free Quote ';
	        $fromemail = 'info@baagdi.com';
	        $fromname = '';
	        
	        $message->to($to);
	        $message->subject($subject);
	        $message->from($fromemail,$fromname);
	        if(Session::get('imageName') != ''){
	        	$message->attach(public_path('upload_image_get_a_free_quote').'/'.Session::get('imageName'));
	    	}
	        Session::put('imageName', '');
      	});
      	return \Redirect::back()->with('success','Thanks For your message.');

    }
    public function contact_us(Request $request)
    {    	   	
    	$name = $request->name2;
    	$email = $request->email2;
    	$whatsapp = $request->whatsapp2;
    	$message_1 = $request->message2;

    	$data = array('name'=>$name,'email'=>$email,'whatsapp'=>$whatsapp,'message_1'=>$message_1);

   		Mail::send(['text'=>'frontend.emails.contact_us'], $data, function($message) {
	        $to = 'ankur.baagdisolutions@gmail.com';
	        $subject = 'Get a Free Quote ';
	        $fromemail = 'info@baagdi.com';
	        $fromname = '';
	        
	        $message->to($to);
	        $message->subject($subject);
	        $message->from($fromemail,$fromname);
	        
      	});
      	return \Redirect::back()->with('success','Thanks For your message.');

    }
}    	