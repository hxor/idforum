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

    /**
     * This Discussion belongs to User
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * This discussion belongs to Channel
     *
     * @return void
     */
    public function channel()
    {
        return $this->belongsTo(Channel::class, 'channel_id', 'id');
    }

    /**
     * This discussion has many replies
     *
     * @return void
     */
    public function replies()
    {
        return $this->hasMany(Reply::class, 'discussion_id', 'id');
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
