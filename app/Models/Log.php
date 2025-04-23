<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $timestamps = false; // karena kita hanya punya `created_at`
    
    protected $fillable = [
        'activity',
        'user',
        'created_at',
    ];
}
