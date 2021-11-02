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
    public function create(){
        return view ('createPost');
    }
    public function store(Request $request){
        $data = new Post();
        $data->contenu = $request->postType;
        $data->save();
        return back();
    }
}
