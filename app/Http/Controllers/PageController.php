<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    
    public function Publish(){
        $posts = Post::all();
        return view('postView',compact('posts'));
    }
    public function create(){
        return view ('createPost');
    }
    public function profil(){
        $user = Auth::user();
        return view ('profil', compact('user'));
    }
    public function store(Request $request){
        $post = new Post();
        $post->contenu = $request->contenu;
        $post->userid = auth()->user()->id;
        $post->save();
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

    // public function logout(){
    //     Auth::logout();
    //     return redirect(url('/login'));
    // }
    
}
