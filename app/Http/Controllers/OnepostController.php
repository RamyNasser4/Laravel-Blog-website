<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;



class OnepostController extends Controller
{
    public function onepost($id){
        $posts = Post::where('id',$id)->get();
        $comments= Comment::where('post_id',$id)->get();
        $users=array();
        foreach($comments as $comment){
            $user=User::where('id',$comment->user_id)->first();
            array_push($users,$user);
        }
        // $array=array_merge($comments,$users);
        return view('onepost',['posts' => $posts, 'comments'=>$comments,'users'=>$users]);
        // print_r ($users);
    }
    public function newcomment(Request $request,$id){
        $request->validate([
            'comment_body'=>'required|string|max:255'
        
            
        ],[
            'comment_body.required'=>"You should enter a comment to post!",
            'comment_body.max'=>"Maximum characters are 255 only!"
        ]);
        $comment=new Comment;
        $comment->comment_body=$request->comment_body;
        $comment->post_id=$id;
        $user_id=Session::get('loginid');
        $user=User::where('id',$user_id);
        $comment->user_id=$user_id;


        // Auth::id()
        $comment->save();
        $posts = Post::where('id',$id)->get();
        $comments= Comment::where('post_id',$id)->get();
        $users=array();
        foreach($comments as $comment){
            $user=User::where('id',$comment->user_id)->first();
            array_push($users,$user);
        }
        return view('onepost',['posts' => $posts, 'comments'=>$comments,'users'=>$users]);    }
    
}
