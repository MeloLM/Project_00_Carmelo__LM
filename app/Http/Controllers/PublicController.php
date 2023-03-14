<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function contact(){
        return view('contactUs');
    }

    public function contact_us(Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $message = $request->input('message');
    $userData = compact('name', 'email', 'message','phone');
    
    Mail::to($email)->send(new ContactMail($userData));

    return redirect(route('contactUs'))->with('emailSented', 'Email inviata! Grazie');
    }

}
