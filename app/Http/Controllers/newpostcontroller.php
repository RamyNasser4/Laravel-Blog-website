<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class newpostcontroller extends Controller {
    public function addnewpost(){
        $user_id = Session::get('loginid');
        $users=User::where('id',$user_id)->first();
    return view('newpost',['users'=>$users]);
}
public function insert(Request $request ) {
    $request->validate([
        'post_title'=>'required|string|max:50',
        'post_body' =>'required|string|max:255'
    ],[
        'post_title.required' => 'A title is required',
        'post_body.required' => 'Enter post content',
        'post_title.max' => 'Title exceeds limit',
        'post_body.max' => 'Content exceeds limit'
    ]);

$post = new Post();
$post->post_title = $request->post_title;
$post->post_body =$request->post_body;
$user_id = Session::get('loginid');
$post->user_id = $user_id;
$post->save();
return redirect('/Home'); 
}
}
