<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MediaPromosi\MediaPromosi;

use Youtube;

class MediaPromosiController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('pages.frontend.media.index');
	}

	public function video()
	{
		//
		$videos = [];

		$channel = Youtube::getChannelById('UCdz07EAMX4sD7rbmZm6CvdQ');
		$playlists = Youtube::getPlaylistsByChannelId($channel->id);
		foreach($playlists['results'] as $playlist){
			$playlistItems = Youtube::getPlaylistItemsByPlaylistId($playlist->id);
			foreach($playlistItems['results'] as $item){
				array_push($videos, ['id' => $item->contentDetails->videoId, 'title' => $item->snippet->title]);
			}
		}
		return view('pages.frontend.media.video', compact('videos'));
	}

	public function gambar()
	{
		$pictures = MediaPromosi::where('tipe', '=', 'gambar')->get();
		return view('pages.frontend.media.gambar', compact('pictures'));
	}

	public function audio()
	{
		$audios = MediaPromosi::where('tipe', '=', 'audio')->get();
		return view('pages.frontend.media.audio', compact('audios'));
	}

	public function dokumen()
	{
		$docs = MediaPromosi::where('tipe', '=', 'dokumen')->get();
		return view('pages.frontend.media.dokumen', compact('docs'));
	}

	public function dokumenShow($lokasi)
	{
		return view('pages.frontend.media.dokumen_show', ['lokasi' => $lokasi]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
