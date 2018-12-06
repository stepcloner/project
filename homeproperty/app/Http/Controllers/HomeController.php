<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user ="fonnarak";
        $data = [
            'fon',
            'fie',
            'helloworld'
            ];

      //  return view('home.index')->with('user',$user);
         return view('home.index',compact('data'));
    }
}
