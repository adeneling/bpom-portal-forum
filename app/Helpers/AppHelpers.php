<?php

namespace App\Helpers;

class AppHelpers{

	public static function urlThreadForum($id, $judul){

		//
		return route('thread.show.detail', [base64_encode(config('app.salt').$id), str_slug($judul, '-')]);
	}

	public static function photoProfile($email){
		return 'http://www.gravatar.com/avatar/'.md5(strtolower(trim($email))).'?s=85&d=identicon';
	}

	public static function seo_friendly_url($string){
		$string = preg_replace('/[^A-Za-z0-9\. -]/', '', $string);
		$string = str_replace(array('[\', \']'), '', $string);
		$string = preg_replace('/\[.*\]/U', '', $string);
		$string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
		$string = htmlentities($string, ENT_COMPAT, 'utf-8');
		$string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
		$string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
		return strtolower(trim($string, '-'));
	}
}