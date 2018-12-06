<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function store(Request $req)
    {
        //   dd($req ->all());
        $req ->validate([
            'email' =>'required|email',
            'password' => 'required'
                    ]);

     //return redirect('/success');         //                               #1
    //return redirect()->route('success');           //                       #2
    // return redirect()->back();              //                             #3
    // return redirect()->back()->with('msg','ขอบคุณที่กรอกข้อมูลน้าาจ้าาา');   //  #4
        return response()->json(
            [
                'post' => [
                    ['id',1,'titile' => 'Abc'],
                    ['id',2,'titile' => 'Abcsa'],
                    ['id',3,'titile' => 'Abcd'],
                    ['id',4,'titile' => 'Abcasda'],
                ]
            ]);
    }
}
