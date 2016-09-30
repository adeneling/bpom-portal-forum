<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserControl\ForumUsers;

class ThreadImage extends Model
{
	//

	public function forumUsers(){
    	return $this->belongsTo(ForumUsers::class, 'forum_user_id');
    }

    public function withLocated($located){
    	$this->located = $located;
    	return $this;
    }

    public function saveImage(){
    	$this->save();
    	return $this;
    }
}
