<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        Post::create($request->all());
        return redirect('/posts ');
    }
    public function show($id){
        $posts = Post::findOrFail($id);
        return view ('posts.show', compact('posts'));
    }
    public function destroy($id){
        $posts = Post::FindOrFail($id);
        $posts->delete();
        return redirect('/posts');
    }
    public function edit($id){
        $post = Post::FindOrFail($id);
        return view('posts.edit', compact('post'));
    }

}