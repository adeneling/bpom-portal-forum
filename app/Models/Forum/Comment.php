<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Model;
use App\Models\Forum\Thread;
use App\Models\UserControl\ForumUsers;

class Comment extends Model
{
    //
    protected $table = 'komentar';

    public function thread(){
    	return $this->belongsTo(Thread::class);
    }

    public function forumUsers(){
    	return $this->belongsTo(ForumUsers::class, 'forum_user_id');
    }

    public function scopeLastComment($query, $thread_id){
    	return $query->where('thread_id', $thread_id)->orderBy('created_at', 'desc')->take(1)->get();
    }

    public function scopeCommentThread($query, $thread_id){
    	return $query->where('thread_id', $thread_id);
    }

    public function withUser(){
        $this->forum_user_id = auth('forum')->user()->id;
        return $this;
    }

    public function withComment($comment){
        $this->comment = $comment;
        return $this;
    }

    public function withCounter($counter){
        $this->counter = $counter+=1;
        return $this;
    }

    public function saveComment(){
        $this->save();
        return $this;
    }
}
