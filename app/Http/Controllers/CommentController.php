<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:user,userAdmin'])->only(['saveComment']);

    }

    public function saveComment(Request $request)
    {
        $post = Post::findOrFail($request->post_id);

        Comment::create([
            'content' => $request->content,
            'user_id' => $request->user_id,
            'post_id' => $post->id
        ]);
        return redirect()->route("displaypost", $post->id);
    }
}
