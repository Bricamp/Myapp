<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    //
    protected $fillable = ['content', 'user_id', 'post_id'];

    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function users()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
