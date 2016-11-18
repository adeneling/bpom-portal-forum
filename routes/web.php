<?php
/* FRONT */
Route::group(['namespace' => 'Front'], function(){
	/* FRONT */
	Route::resource('/','BerandaController');
	Route::resource('profile','ProfileController');
	Route::resource('faq','FAQController');
	Route::resource('hubungi-kami','HubungiKamiController');
	Route::resource('sipaman','SipamanController');
	Route::resource('peta-situs','PetaSitusController');
	
	/* BERITA */
	Route::resource('berita','BeritaController');
	Route::get('berita/{id}/{judul}', 'BeritaController@show')->name('berita.lihat');
	/* GALERI */
	Route::resource('galeri','GaleriController');
	/* PROGRAM */
	Route::resource('program','ProgramController');
	Route::get('program/{id}/{judul}', 'ProgramController@show')->name('program.lihat');
	Route::get('program/dokumen/{lokasi}/show', 'ProgramController@dokumenShow')->name('program.dokumen.show');
	/* PEDOMAN */
	Route::resource('pedoman','PedomanController');
	Route::get('pedoman/{id}/{judul}', 'PedomanController@show')->name('pedoman.lihat');
	Route::get('pedoman/dokumen/{lokasi}/show', 'PedomanController@dokumenShow')->name('pedoman.dokumen.show');
	/* MEDIA PROMOSI*/
	Route::resource('media-promosi','MediaPromosiController');
	Route::get('media-informasi/video', 'MediaPromosiController@video')->name('media.video');
	Route::get('media-informasi/gambar', 'MediaPromosiController@gambar')->name('media.gambar');
	Route::get('media-informasi/visual', 'MediaPromosiController@visual')->name('media.visual');
	Route::get('media-informasi/audio', 'MediaPromosiController@audio')->name('media.audio');
	Route::get('media-informasi/dokumen', 'MediaPromosiController@dokumen')->name('media.dokumen');
	Route::get('media-informasi/dokumen/{lokasi}/show', 'MediaPromosiController@dokumenShow')->name('media.dokumen.show');
	/* PASAR AMAN */
	Route::resource('pasar-aman','PasarAmanController');
	Route::get('pasar-pengawasan', 'PasarAmanController@pasarPengawasan')->name('pasar.pengawasan');
	Route::get('pasar-aman/{id}/{judul}', 'PasarAmanController@show')->name('pasar-aman.lihat');
	/* BAHAN BERBAHAYA */
	Route::resource('bahan-berbahaya','BahanBerbahayaController');
	Route::get('bahan-berbahaya/{id}/{judul}', 'BahanBerbahayaController@show')->name('bahan-berbahaya.lihat');
	// POLLING
	Route::resource('polling', 'PollingController');
});

// Forum
Route::group(['namespace' => 'Forum', 'prefix' => 'forum-fasilitator'], function(){
	// Authentication Forum
	Route::auth();
	// Thread
	Route::resource('thread','ForumFasilitatorController');
	Route::get('guide/{id}/show/{judul}', 'ForumFasilitatorController@show')->name('guide.show.detail');
	Route::get('thread/{id}/show/{judul}', 'ForumFasilitatorController@show')->name('thread.show.detail');
	Route::get('guides', 'ForumFasilitatorController@guides')->name('guides.all');
	Route::delete('guides/{id}', 'ForumFasilitatorController@deleteGuides')->name('guides.delete');
	Route::get('threads', 'ForumFasilitatorController@threads')->name('threads.all');
	Route::post('threads/update/{id}', 'ForumFasilitatorController@updateThread')->name('threads.update');
	Route::delete('threads/{id}', 'ForumFasilitatorController@deleteThreads')->name('threads.delete');
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
	// Profile
	Route::resource('profile', 'Profile\ProfileController');
	// Dashboard
	Route::resource('dashboard', 'BackController');
	Route::get('tes', 'BackController@tesPasarAman');
	// Kelola Banner
	Route::resource('banner', 'Banner\BannerController');
	Route::post('banner/enabled/{id}/{isenabled}', 'Banner\BannerController@enabled')->name('banner.enabled');
	// Kelola Berita
	Route::resource('berita', 'Berita\BeritaController');
	// Kelola Galeri
	Route::resource('galeri', 'Galeri\GaleriController');
	// Kelola Program
	Route::resource('program', 'Program\ProgramController');
	Route::post('program/enabled/{id}/{isenabled}', 'Program\ProgramController@enabled')->name('program.enabled');
	Route::resource('program-dokumen', 'Program\ProgramDokumenController');
	// Kelola Pedoman
	Route::resource('pedoman', 'Pedoman\PedomanController');
	// Kelola Media Promosi
	Route::resource('media-promosi', 'MediaPromosi\MediaPromosiController');
	// Kelola Pasar Aman
	Route::resource('pasar-aman', 'PasarAman\PasarAmanController');
	Route::get('pasar-aman/get-city/{province_id}', 'PasarAman\PasarAmanController@getCity');
	Route::get('pasar-aman/get-subdistrict/{province_id}/{city_id}', 'PasarAman\PasarAmanController@getSubdistrict');
	// pengawasan pasar
	Route::resource('pengawasan-pasar', 'PasarAman\PengawasanPasarController');
	// Kelola Bahan Berbahaya
	Route::resource('bahan-berbahaya', 'BahanBerbahaya\BahanBerbahayaController');
	// Kelola Forum users
	Route::resource('pengguna-forum', 'ForumUsers\ForumUsersController');
	Route::post('pengguna-forum/isadmin/{id}/{isadmin}', 'ForumUsers\ForumUsersController@admin')->name('forum.users.admin');
	// User Control
	Route::resource('users', 'UserControl\UserController');
});

Route::get('tes', function(){
	// $pasarAman = App\Models\PasarAman\PasarAman::has('pasar')->count();
	$pasarRemote = App\Models\Remote\Pasar::doesntHave('samplingDetail')->count();
	$detail = App\Models\Remote\SamplingDetail::has('pasar')->count();

	echo $pasarRemote;


	
	
});