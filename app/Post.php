<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['user_id', 'title', 'subject', 'content', 'views'];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
