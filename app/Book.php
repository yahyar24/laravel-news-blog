<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','last_name','email','phone','cheak_one',
    'cheak_last',
    'number_man',
    'number_ch',
    'date_one',
    'date_last',
    'message' ];
}
