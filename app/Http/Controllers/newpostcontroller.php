<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class newpostcontroller extends Controller {
    public function addnewpost(){
        $user=Auth::user();
    return view('newpost',['users'->$user]);
}
}