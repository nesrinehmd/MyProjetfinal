<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SignupEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
//use Mail;
//use App\Mail;
//use App\Mail\SignupEmail;

class MailController extends Controller
{
    public static function sendSignupEmail($name, $email/*,$verification_code*/)
    {
        $data = [
            'name' => $name,
            'email' => $email,
           
        ];
        //Mail::to($email)->send(new SignupEmail($data));
        Mail::to("monprojetECTO@gmail.com")->send(new SignupEmail());
    }
}
