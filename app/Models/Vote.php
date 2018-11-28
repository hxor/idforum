<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'user_id', 'voteable_id', 'voteable_type'
    ];

    public function voteable()
    {
        return $this->morphTo();
    }

    /**
     * This vote belongs to user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
