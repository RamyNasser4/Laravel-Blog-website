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
    'email.required' => "EMAIL field is required",
    'password.required' => "password field is required"
    ]);
    $user=User::where('email','=',$request->email )->first();
  
if ($user){
if ($request->password==$user->password){
Session::put('loginid',$user->id);  
return Redirect('Home');
}
else{
    return Redirect::back()->withErrors(
        [
            'password' => 'the password is not correct'
        ]
    );}


}
else{
    return Redirect::back()->withErrors(
        [
            'email' => 'the email is not correct',
            'password' => 'the password is not correct'
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
