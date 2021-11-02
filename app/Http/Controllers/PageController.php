<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginn(){
        return view ('authentication.login');
    }
}
