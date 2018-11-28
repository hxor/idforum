<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * This users has many discussions
     *
     * @return void
     */
    public function discussions()
    {
        return $this->hasMany(Discussion::class, 'user_id', 'id');
    }

    /**
     * This users has many replies
     *
     * @return void
     */
    public function replies()
    {
        return $this->hasMany(Reply::class, 'user_id', 'id');
    }

    /**
     * This users has many votes
     *
     * @return void
     */
    public function votes()
    {
        return $this->morphMany(Votes::class, 'voteable');
    }
}
