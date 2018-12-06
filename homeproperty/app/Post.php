<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'users_posts'; 
  protected $fillable = ['title','body','status'];
}
