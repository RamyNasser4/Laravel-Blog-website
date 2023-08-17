<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Redirect;

class LoginController extends Controller
{
   
   public function login (){
return view ('login');


   }

   public function loginUser (Request $request){

$request->validate([
    'email'=>'required',
    'password'=>'required'
],[
    'email.required' => "Email field is required",
    'password.required' => "Password field is required"
    ]);
    $user=User::where('email','=',$request->email )->first();
  
if ($user){
if (Hash::check($request->password,$user->password)){
Session::put('loginid',$user->id);  
return Redirect('Home');
}
else{
    return Redirect::back()->withErrors(
        [
            'password' => 'The password is not correct'
        ]
    );}


}
else{
    return Redirect::back()->withErrors(
        [
            'email' => 'The email is not correct',
            'password' => 'The password is not correct'
        ]
    );
}
}
public function logout(){

    if (Session::has('loginid')){
        Session::pull('loginid');
        return Redirect('Home');
    }
}
}
