<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;

class ContactMessageController extends Controller
{
    public function create()
    {
    	return view('contacto');
    }

    // public function store(Request $request)
    // {
    // 	$this->validate($request, [
    // 		'name' => 'required',
    // 		'phone' => 'required',
    // 		'email' => 'required|email',
    // 		'message' => 'required'
    // 	]);

    // 	Mail::send('emails.contact-message',[
    // 		'msg' => $request->message
    // 	],function($mail) use ($request){
    // 		$mail->from($request->email, $request->name);
    // 		$mail->to('contacto@tukondominio.cl')->subject($request->email ' - ' $request->phone);
    // 	});
    // 	return redirect()->back();
    // }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'phone' => 'required',
    		'email' => 'required|email',
    		'message' => 'required'
    	]);

    	$data = array(
    		'email' => $request->email, 
    		'name' => $request->name,
    		'msg' => 	$request->message,
    		'phone' => $request->phone
    	);

    	Mail::send('emails.contact-message', $data, function($message) use($data){
    		$message->from('contacto@tukondominio.cl');
    		$message->replyto($data['email']);
    		$message->to('contacto@tukondominio.cl');
    		$message->subject($data['name']);
    	});

    	return redirect()->back();
    }
}
