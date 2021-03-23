<?php

namespace App\API;

use Illuminate\Database\Eloquent\Model;

class AppSession extends Model
{
    protected $table = "app_sessions";
   
    protected $hidden = ['first_session', 'recent_session'];

    protected $fillable = [
        'id',
        'client_id',
        'app_id',
        'device_id',
       'is_active',
        'is_delete',
        'first_session',
        'recent_session',
        // 'updated_at'
    ];
}
