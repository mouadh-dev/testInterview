<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PageController extends Controller
{
    public function loginn(){
        return view ('authentication.login');
    }
    public function Publish(){
        $posts = Post::all();
        return view('postView',compact('posts'));
    }
}
