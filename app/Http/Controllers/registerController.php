<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Requests\createUserRequest;
use App\Models\User;
use Hash;
use Session ;
class registerController extends Controller
{
 public function register (){

    return view ( 'reg');
 }

public function store (createUserRequest $request){

    $user = new User();
     $user->name = $request->name;
    $user->email = $request->email;
    $user->gender= $request->gender;
    $user->address = $request->email;
    $user->password = Hash::make($request->password) ;
    $user->save();

    Session::put('loginid',$user->id);  
return Redirect('Home');

}
}
