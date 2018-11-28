<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'user_id', 'discussion_id', 'content', 'is_answered'
    ];
}
