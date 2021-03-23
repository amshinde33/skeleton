<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = "applications";
    public $timestamps = true;

    protected $fillable = [
        'id',
        'app_name',
        'app_key',
        'sku',
       'is_active',
        'is_delete',
        'created_at',
        'updated_at'
             
    ];

}
