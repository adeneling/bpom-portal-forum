<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserControl\ForumUsers;
use App\Models\Forum\Comment;

class Thread extends Model
{
    //
    public function forumUsers(){
    	return $this->belongsTo(ForumUsers::class, 'forum_user_id');
    }

    public function comment(){
    	return $this->hasMany(Comment::class);
    }
}
