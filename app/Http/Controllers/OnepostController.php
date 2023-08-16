<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class OnepostController extends Controller
{
    public function onepost(){
        $posts = Post::where('id')->get();
    //    Post::find('id');
        return view('onepost',['posts' => $posts])->with(['id'=>$posts]);
        // return Post::find('id');
    }
    
}
