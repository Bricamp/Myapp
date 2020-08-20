<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function viewPosts()
    {
        $posts = DB::table('posts')->paginate(4);
        return view("viewposts")->with(array('posts' => $posts));
    }



    public function createPost(Request $request)
    {

        $post = new Posts();
        $post->author = $request->input("author");
        $post->title = $request->input("title");
        $post->content = $request->input("content");
        $post->subject = $request->input("subject");
        $post->date = date("Y-m-d");


        $post->save();

        return view('welcome');
    }
    public function displayPost($id)
    {
        $post = DB::table("posts")->where('id', $id)->first();
        return view("displaypost")->with('post', $post);
    }


}
