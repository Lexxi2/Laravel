<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // $post = Post::where('title', 'Post Two')->get();
        // $posts = DB::select('SELECT * FROM posts');
        // $posts = Post::orderBy('created_at', 'desc')->take(1)->get();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        // create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    public function edit($id)
    {

    }

}


// run this command in the terminal !!
// php artisan vendor:publish --tag=ckeditor