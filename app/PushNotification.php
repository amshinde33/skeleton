<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PushNotification extends Model
{
    protected $table = "push_notifications";
    public $timestamps = true;

    protected $fillable = [
        'id',
        'app_id',
        'title',
        'detail',
        'date_time',
        'is_send',
        'created_at',
        'updated_at'

    ];
}
