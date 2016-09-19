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
	Route::resource('beranda','BerandaController');
	Route::resource('berita','BeritaController');
	Route::resource('faq','FAQController');
	Route::resource('forum-fasilitator','ForumFasilitatorController');
	Route::resource('galeri','GaleriController');
	Route::resource('hubungi-kami','HubungiKamiController');
	Route::resource('media-promosi','MediaPromosiController');
	Route::resource('pasar-aman','PasarAmanController');
	Route::resource('pedoman','PedomanController');
	Route::resource('sipaman','SipamanController');
	Route::resource('peta-situs','PetaSitusController');
	Route::resource('program','ProgramController');
});

/* BACK */
Route::group(['namespace' => 'Back'], function(){
	Route::resource('admin', 'BackController');
	Route::resource('groups', 'UserControl\GroupController');
});