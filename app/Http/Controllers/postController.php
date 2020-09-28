<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Posts;
use App\Http\Controllers\Controller;
use App\Models\category;

class postController extends Controller
{ 
    public function index()
    {
        $posts = post::all();
        return view('post.index', compact('posts'));
    }

    public function create (){
        $categories = category::all();
        return view('post.create', compact('categories'));
    }

    public function store (){
        post::create([
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'content' => request('content'),
            'category_id' => request('category_id')
        ]);

        return redirect()->route('post.index') ;
    }

    public function edit(post $post)
    {
     
        return view ('post.edit', compact('post'));
    }

    public function update(post $post)
    {

        $post -> update([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect()->route('post.index');
    }

    public function delete(post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }
}
