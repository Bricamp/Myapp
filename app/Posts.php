<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $fillable = ['id'];
    protected $author;
    protected $title;
    protected $subject;
    protected $content;
    protected $date;
    protected $views = 0;
    public $timestamps = false;


}
