<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
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
        $posts = Posts::paginate(6);
        return view("viewposts")->with(array('posts' => $posts));
    }



    public function formPost(Request $request)
    {

        $post = new Posts();
        $post->author = $request->input("author");
        $post->title = $request->input("title");
        $post->content = $request->input("content");
        $post->subject = $request->input("subject");
        $post->date = date("Y-m-d");


        $post->save();

        return view('index');
    }
    public function displayPost($id)
    {
        $post = Posts::where('id', $id)->first();
        $post->views += 1;

        $post->save();

        return view("displaypost")->with('post', $post);
    }


}
