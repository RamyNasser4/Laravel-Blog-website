<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class newpostcontroller extends Controller {
    public function addnewpost(){
    return view('newpost');
}
}