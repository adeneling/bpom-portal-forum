<?php
/* FRONT */
Route::group(['namespace' => 'Front'], function(){
	/**/
	Route::resource('profile','ProfileController');
	Route::resource('faq','FAQController');
	Route::resource('hubungi-kami','HubungiKamiController');
	Route::resource('sipaman','SipamanController');
	Route::resource('peta-situs','PetaSitusController');
	/**/
	Route::resource('/','BerandaController');
	/* BERITA */
	Route::resource('berita','BeritaController');
	Route::get('berita/{id}/{judul}', 'BeritaController@show')->name('berita.lihat');
	/* GALERI */
	Route::resource('galeri','GaleriController');
	/* PROGRAM */
	Route::resource('program','ProgramController');
	Route::get('program/{id}/{judul}', 'ProgramController@show')->name('program.lihat');
	/* PEDOMAN */
	Route::resource('pedoman','PedomanController');
	Route::get('pedoman/{id}/{judul}', 'PedomanController@show')->name('pedoman.lihat');
	/* MEDIA PROMOSI*/
	Route::resource('media-promosi','MediaPromosiController');
	/* PASAR AMAN */
	Route::resource('pasar-aman','PasarAmanController');
	Route::get('pasar-aman/{id}/{judul}', 'PasarAmanController@show')->name('pasar-aman.lihat');
	/* BAHAN BERBAHAYA */
	Route::resource('bahan-berbahaya','BahanBerbahayaController');
	Route::get('bahan-berbahaya/{id}/{judul}', 'BahanBerbahayaController@show')->name('bahan-berbahaya.lihat');
	
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
Route::group(['namespace' => 'Back', 'prefix' => 'admin', 'as' => 'admin.'], function(){
	// Auth 
	Route::auth();
	Route::get('logout', 'Auth\LoginController@logout')->name('logout');
	// Dashboard
	Route::resource('dashboard', 'BackController');
	// Kelola Banner
	Route::resource('banner', 'Banner\BannerController');
	Route::post('banner/enabled/{id}/{isenabled}', 'Banner\BannerController@enabled')->name('banner.enabled');
	// Kelola Berita
	Route::resource('berita', 'Berita\BeritaController');
	Route::resource('gambar-berita', 'Berita\GambarBeritaController');
	// Kelola Galeri
	Route::resource('galeri', 'Galeri\GaleriController');
	// Kelola Program
	Route::resource('program', 'Program\ProgramController');
	// Kelola Pedoman
	Route::resource('pedoman', 'Pedoman\PedomanController');
	// Kelola Media Promosi
	Route::resource('media-promosi', 'MediaPromosi\MediaPromosiController');
	// Kelola Pasar Aman
	Route::resource('pasar-aman', 'PasarAman\PasarAmanController');
	Route::get('pasar-aman/get-city/{province_id}', 'PasarAman\PasarAmanController@getCity');
	Route::get('pasar-aman/get-subdistrict/{province_id}/{city_id}', 'PasarAman\PasarAmanController@getSubdistrict');
	// Kelola FAQ
	Route::resource('faq', 'FAQ\FAQController');
	// Kelola Hubungi Kami
	Route::resource('hubungi-kami', 'HubungiKami\HubungiKamiController');
	// Kelola Bahan Berbahaya
	Route::resource('bahan-berbahaya', 'BahanBerbahaya\BahanBerbahayaController');
	// Kelola Forum users
	Route::resource('pengguna-forum', 'ForumUsers\ForumUsersController');
	Route::post('pengguna-forum/isadmin/{id}/{isadmin}', 'ForumUsers\ForumUsersController@admin')->name('forum.users.admin');
	// User Control
	Route::resource('users', 'UserControl\UserController');
});