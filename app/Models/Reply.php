<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'user_id', 'discussion_id', 'content', 'is_answered'
    ];

    /**
     * This discussion belongs to Channel
     *
     * @return void
     */
    public function discussion()
    {
        return $this->belongsTo(Discussion::class, 'discussion_id', 'id');
    }

    /**
     * This Discussion has Many Votes
     *
     * @return void
     */
    public function votes()
    {
        return $this->morphMany(Vote::class, 'voteable');
    }
}
