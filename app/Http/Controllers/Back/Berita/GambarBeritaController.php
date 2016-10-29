<?php

namespace App\Http\Controllers\Back\Berita;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Berita\GambarBerita;
use App\Models\UserControl\User;

use Auth;
use Storage;

class GambarBeritaController extends Controller
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
		$pictures = GambarBerita::where('user_id', '=', auth()->user()->id)->orderBy('id', 'desc')->get();
		return view('pages.backend.berita._tableGambar', compact('pictures'));
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
		Storage::makeDirectory('berita/foto');
		$filename = '';
		if($request->hasFile('photo')){
			$filename = 'berita/foto/'.str_random(10).'.'.$request->file('photo')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('photo')));
			
			$gambar = User::find(auth()->user()->id)
				  ->newGambar()
				  ->withLocated(Storage::url($filename))
				  ->saveGambar();
		}

		$pictures = GambarBerita::where('user_id', '=', auth()->user()->id)->orderBy('id', 'desc')->get();
		return view('pages.backend.berita._tableGambar', compact('pictures'));

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
		
		$gambar = GambarBerita::find(decrypt($id));
		Storage::delete($gambar->located);
		$gambar->delete();

		$pictures = GambarBerita::where('user_id', '=', auth()->user()->id)->orderBy('id', 'desc')->get();
		return view('pages.backend.berita._tableGambar', compact('pictures'));
	}
}
