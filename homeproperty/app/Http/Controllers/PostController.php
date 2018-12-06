<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Post;

class PostController extends Controller
{
    public function index(){
      $posts = DB::table('users_posts')->orderBy('created_at','desc')->get();
      $posts->toJson();
      return $posts;
   //  dd($posts);

     // return view('posts.post',compact('posts'));

    }
}
