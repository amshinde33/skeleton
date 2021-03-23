<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userdetails extends Model
{
    protected $table = "userdetails";
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'username',
        'email',
        'personalphoneno',
        'workphoneno',
        'country',
        'orgnization',
        'website',
        'file',
        'aboutme',
        'facebook',
        'linkedin',
        'twitter',
        'github',
       'is_active',
        'is_delete',
        'created_at',
        'updated_at'
             
    ];
}
