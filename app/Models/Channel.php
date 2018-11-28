<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = ['slug', 'title'];

    /**
     * This channel has many discussion
     *
     * @return void
     */
    public function discussions()
    {
        return $this->hasMany(Discussion::class, 'channel_id', 'id');
    }
}
