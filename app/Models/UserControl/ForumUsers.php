<?php

namespace App\Models\UserControl;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Forum\Thread;
use App\Models\Forum\Comment;
use App\Models\Forum\ThreadImage;

class ForumUsers extends Authenticatable
{
    //
    use Notifiable;

    protected $table = 'forum_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function thread(){
        return $this->hasMany(Thread::class, 'forum_user_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class, 'forum_user_id');
    }

    public function threadImage(){
        return $this->hasMany(ThreadImage::class, 'forum_user_id');
    }

    public function newThreadImage(){
        $threadImage = new ThreadImage;
        $threadImage->forumUsers()->associate($this);

        return $threadImage;
    }
}
