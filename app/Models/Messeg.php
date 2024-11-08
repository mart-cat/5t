<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messeg extends Model
{
    protected $fillable = [
        'text',
        'user_id'
    ];
}
