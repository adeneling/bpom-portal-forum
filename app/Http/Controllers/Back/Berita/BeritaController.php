<?php

namespace App\Http\Controllers\Back\Berita;

use Illuminate\Http\Request;
use Auth;
use Storage;
use App\Http\Requests;
use App\Http\Requests\Berita\BeritaStore;
use App\Http\Requests\Berita\BeritaUpdate;
use App\Http\Controllers\Controller;
use App\Models\Berita\Berita;

class BeritaController extends Controller
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
		$beritas = Berita::orderBy('created_at','desc')->paginate(10);
		return view('pages.backend.berita.index', compact('beritas'))->withTitle('Kelola Berita');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('pages.backend.berita.create')->withTitle('Tambah Berita');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(BeritaStore $request)
	{
		Storage::makeDirectory('berita/foto');
		$filename = '';
		if($request->hasFile('photo')){
			$filename = 'berita/foto/'.str_random(10).'.'.$request->file('photo')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('photo')));
		}

		$berita = new Berita;
		$berita->user_id = Auth::user()->id;
		$berita->judul = $request->input('judul');
		$berita->konten = $request->input('konten');
		$berita->foto = $filename != '' ? Storage::url($filename) : '/assets/frontend/img/logo-bpom.png';
		$berita->ket_foto = $filename != '' ? Storage::url($filename) : '';
		$berita->save();
		return redirect('admin/berita');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$berita = Berita::findOrFail(decrypt($id));
		return view('pages.backend.berita.show', compact('berita'))->withTitle('Lihat Berita');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$berita = Berita::findOrFail(decrypt($id));
		return view('pages.backend.berita.edit', compact('berita'))->withTitle('Edit Berita');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(BeritaUpdate $request, $id)
	{
		Storage::makeDirectory('berita/foto');
		$filename = '';

		$berita = Berita::findOrFail($id);
		$berita->judul = $request->input('judul');
		$berita->konten = $request->input('konten');
		
		if($request->hasFile('photo')){
			$filename = 'berita/foto/'.str_random(10).'.'.$request->file('photo')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('photo')));
		}else{
			$filename = str_replace("/storage/", "", $berita->foto);
		}

		$berita->foto = $filename != '' ? Storage::url($filename) : '';
		$berita->ket_foto = $filename != '' ? Storage::url($filename) : '';
		$berita->update();
		return redirect('admin/berita');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$berita = Berita::find(decrypt($id));
		$berita->delete();

		$beritas = Berita::orderBy('created_at','desc')->paginate(10);
		return view('pages.backend.berita._tableBerita', compact('beritas'));
	}
}
