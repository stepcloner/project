<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\OrderShipped;

class MailController extends Controller
{
    public function index(){

        $user = "fkverdam@example.com";
        Mail::to($user)->send(new OrderShipped);
     //   return view('mail.index');
        
    }
    public function store(Request $request){
    //    dd($request ->all());

        //validate
        $request ->validate([
            'email' => 'required|email'
        ]
        );
    }
}
