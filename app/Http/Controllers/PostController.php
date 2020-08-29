<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->only(['formPost']);
    }
    public function viewPosts()
    {
        $posts = Post::paginate(6);
        return view("viewposts")->with(array('posts' => $posts));
    }


    public function formPost(Request $request)
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

        return view("displaypost")->with('post', $post);
    }


}
