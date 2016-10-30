<?php

namespace App\Http\Controllers\Back\MediaPromosi;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MediaPromosi\MediaPromosi;

use Storage;

class MediaPromosiController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:web');
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		$media = MediaPromosi::all();
		return view('pages.backend.media-promosi.index', compact('media'))->withTitle('Kelola Media Promosi');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('pages.backend.media-promosi.create')->withTitle('Tambah Media Promosi');
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
		Storage::makeDirectory('media');
		$filename = '';

		if($request->get('tipe') == 'audio'){
			Storage::makeDirectory('media/audio');
			$filename = 'media/audio/'.str_random(10).'.'.$request->file('file')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('file')));
		}else if($request->get('tipe') == 'gambar'){
			Storage::makeDirectory('media/gambar');
			$filename = 'media/gambar/'.str_random(10).'.'.$request->file('file')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('file')));
		}else if($request->get('tipe') == 'dokumen'){
			Storage::makeDirectory('media/dokumen');
			$filename = 'media/dokumen/'.str_random(10).'.'.$request->file('file')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('file')));

		}

		$media = new MediaPromosi;
		$media->user_id = auth('web')->user()->id;
		$media->nama = $request->get('nama');
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = $request->get('deskripsi');
		$media->tipe = $request->get('tipe');
		$media->save();

		return redirect()->route('admin.media-promosi.index');
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
		$file = MediaPromosi::find(decrypt($id));
		Storage::delete($file->lokasi);
		$file->delete();

		$media = MediaPromosi::all();
		return view('pages.backend.media-promosi._tableMediaPromosi', compact('media'));
	}
}
