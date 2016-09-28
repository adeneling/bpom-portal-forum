<?php

namespace App\Helpers;

class AppHelpers{

	public static function urlThreadForum($id, $judul){
		return url('forum-fasilitator/'.base64_encode(config('app.salt').$id).'/show/'.strtolower(str_replace(' ', '-', $judul)));
	}
}