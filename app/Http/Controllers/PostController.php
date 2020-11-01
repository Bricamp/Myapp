<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('role:admin')->only(['formPost']);


    // }
    public function viewPosts()
    {
        $posts = Post::paginate(6);
        return view("posts/viewposts")->with(['posts' => $posts]);
    }

    public function createPost()
    {
        return view('posts/createPost');
    }

    public function post_createPost(Request $request)
    {

        $newpost = Post::create([
            'author' => $request['author'],
            'title' => $request['title'],
            'content' => $request['content'],
            'subject' => $request['subject'],
            'views' => 0
        ]);


        return $this->displayPost($newpost->id);
    }
    public function displayPost($id)
    {

        $post = Post::where('id', $id)->first();
        $post->views += 1;
        $post->save();


        $comments_userid = Comment::where('post_id', $id)->with('users')->paginate(6);


        return view("posts/displaypost")->with(['post' => $post, 'comments' => $comments_userid] );
    }

    public function post_editPost(Request $request)
    {
        $post = Post::where('id', $request->post_id)->first();
        return view('posts/editpost')->with(['post' => $post]);
    }

    public function post_updatePost(Request $request)
    {
        Post::where('id', $request->post_id)->update([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'subject' => $request->subject,
            'content' => $request->content
            ]);

        $post=Post::where('id', $request->post_id)->first();

        return $this->displayPost($post->id);
    }
}
