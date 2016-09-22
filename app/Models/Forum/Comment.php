<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Model;
use App\Models\Forum\Thread;
use App\Models\UserControl\ForumUsers;

class Comment extends Model
{
    //
    public function thread(){
    	return $this->belongsTo(Thread::class);
    }

    public function forumUsers(){
    	return $this->belongsTo(ForumUsers::class);
    }

    public function scopeLastComment($query, $thread_id){
    	return $query->where('thread_id', $thread_id)->orderBy('created_at', 'desc')->take(1)->get();
    }

    public function scopeCommentThread($query, $thread_id){
    	return $query->where('thread_id', $thread_id);
    }
}
