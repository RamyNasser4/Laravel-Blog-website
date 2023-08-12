<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use session;
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
return redirect ('Home');
}
else{
    return Redirect::back()->withErrors(
        [
            'password' => 'Snap! you are done!'
        ]
    );}


}
else{
    return Redirect::back()->withErrors(
        [
            'email' => 'Snap! you are done!'
        ]
    );
}
}
}
