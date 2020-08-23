<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analytics extends Model
{
    //
    protected $fillable = ['visitas', 'date '];
    public $timestamps = false;
}
