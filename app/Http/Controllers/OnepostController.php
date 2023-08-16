<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class OnepostController extends Controller
{
    public function onepost($id){
        $posts = Post::where('id',$id)->get();
        $comments= Comment::where('post_id',$id)->get();
    //    Post::find('id');
        return view('onepost',['posts' => $posts, 'comments'=>$comments]);
        // return Post::find('id');
    }
    
}
