<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [

    	'name',
    	'email',
    	'message',
    	'photo_id',

    ];
}
