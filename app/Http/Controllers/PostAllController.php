<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostAllController extends Controller
{

    const COUNT_POSTS_ON_PAGE = 1;

    public function index(Request $request)
    {
        $page = !empty($request->page) ? $request->page : 1;

        
        $posts = Post::take(self::COUNT_POSTS_ON_PAGE)->skip(($page - 1) * self::COUNT_POSTS_ON_PAGE)->get();
        $count = Post::count();

        $count_pages = floor($count / self::COUNT_POSTS_ON_PAGE);
        return view('posts.index', [
            'posts' => $posts,
            'count_pages' => $count_pages
        ]);
    }

    public function store(Post $post = null, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'post' => 'required|max:255'
        ]);

        if (! $post) {
            $post = new Post();
        }

        $post->title = $request->title;
        $post->post = $request->post;
        $post->user_id = $request->user()->id;
        $post->save();

        return redirect('/posts');
    }
}
