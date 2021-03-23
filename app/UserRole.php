<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = "user_roles";
    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'description',
        'is_active',
        'created_at',
        'updated_at'

    ];
}
