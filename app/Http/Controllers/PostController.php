<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function post(Request $request)
    {
        $users = User::all();
        return view('posts.postCreate', [
            'users' => $users,
        ]);
    }
    
    public function update(Post $post, Request $request)
    {
        return view('posts.postUpdate', [
            'post' => $post,
        ]);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
