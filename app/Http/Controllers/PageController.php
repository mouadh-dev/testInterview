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
    public function edit($id){
        $row=Post::findOrFail($id);
        return view ('editPost',compact('row'));
    }
    public function update(Request $request){
        $data = Post::findOrFail($request->id);

        $data->contenu = $request->editpost;
        $data->save();
        return back();
    }
    public function remove($id){
        $row=Post::findOrFail($id);
        $row->delete();
        return back();
    }
}
