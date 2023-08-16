<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Session;

class PostController extends Controller
{
    public function show(){
       
         
        $posts = Post::all();
        return view('Home',['posts' => $posts]);
    
}
}
