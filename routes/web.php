<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Front\BerandaController@index');

/* FRONT */
Route::group(['namespace' => 'Front'], function(){
	/**/
	Route::resource('profile','ProfileController');
	Route::resource('faq','FAQController');
	Route::resource('hubungi-kami','HubungiKamiController');
	Route::resource('sipaman','SipamanController');
	Route::resource('peta-situs','PetaSitusController');
	/**/
	Route::resource('beranda','BerandaController');
	Route::resource('berita','BeritaController');
	Route::resource('galeri','GaleriController');
	Route::resource('program','ProgramController');
	Route::resource('pedoman','PedomanController');
	Route::resource('media-promosi','MediaPromosiController');	
	Route::resource('pasar-aman','PasarAmanController');
});

// Forum
Route::group(['namespace' => 'Forum', 'prefix' => 'forum-fasilitator'], function(){
	// Authentication Forum
	Route::auth();
	Route::get('logout', 'Auth\LoginController@logout');

	// Thread
	Route::resource('thread','ForumFasilitatorController');
	Route::get('thread/{id}/show/{judul}', 'ForumFasilitatorController@show')->name('thread.show.detail');

	// Comment
	Route::resource('comment', 'CommentController');
	Route::get('comment/create/{id}', 'CommentController@create')->name('comment.create');
	Route::get('comment/quote/{id}', 'CommentController@quote')->name('comment.quote');

	// Image on Thread
	Route::resource('image-thread', 'ImageController');

	// Profile Forum
	Route::resource('profile', 'ProfileController');
});

/* BACK */
Route::group(['namespace' => 'Back'], function(){
	Route::auth();
	Route::get('logout', 'Auth\LoginController@logout');
	Route::group(['middleware' => ['auth', 'auth.basic']], function(){
		Route::resource('admin', 'BackController');
		Route::resource('groups', 'UserControl\GroupController');
		Route::resource('users', 'UserControl\UserController');
	});
});