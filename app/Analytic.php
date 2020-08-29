<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analytic extends Model
{
    //
    protected $fillable = ['visitas'];
    public $dateFormat = 'Y-m-d';
}
