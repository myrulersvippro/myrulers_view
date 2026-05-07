<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FbAccount extends Model
{
    protected $fillable = [
        'userid',
        'webid',
        'user',
        'password',
        'type',
        'ip',
    ];
}
