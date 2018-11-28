<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = [
        'user_id', 'channel_id',
        'slug', 'title', 'content',
        'is_solved'
    ];
}
