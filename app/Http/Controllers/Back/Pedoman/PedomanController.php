<?php

namespace App\Http\Controllers\Back\Pedoman;

use Illuminate\Http\Request;
use Auth;
use Storage;
use App\Http\Requests;
use App\Http\Requests\Pedoman\PedomanStore;
use App\Http\Requests\Pedoman\PedomanUpdate;
use App\Http\Controllers\Controller;
use App\Models\Pedoman\Pedoman;

class PedomanController extends Controller
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
		$pedomans = Pedoman::orderBy('created_at','desc')->paginate(10);
		return view('pages.backend.pedoman.index', compact('pedomans'))->withTitle('Kelola Pedoman');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('pages.backend.pedoman.create')->withTitle('Tambah Pedoman');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(PedomanStore $request)
	{
		/* make directory */
		Storage::makeDirectory('pedoman/dokumen');
		$file_dokumen = '';
		if($request->hasFile('media_dokumen')){
			$file_dokumen = 'pedoman/dokumen/'.str_random(3).'.'.$request->file('media_dokumen')->getClientOriginalName();
			Storage::put($file_dokumen, file_get_contents($request->file('media_dokumen')));
		}

		$pedoman = new Pedoman;
		$pedoman->user_id = Auth::user()->id;
		$pedoman->judul = $request->input('judul');
		$pedoman->konten = $request->input('konten');
		$pedoman->media_dokumen = $file_dokumen != '' ? Storage::url($file_dokumen) : '';
		$pedoman->save();
		return redirect('admin/pedoman');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$pedoman = Pedoman::findOrFail(decrypt($id));
		return view('pages.backend.pedoman.show', compact('pedoman'))->withTitle('Lihat Pedoman');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$pedoman = Pedoman::findOrFail(decrypt($id));
		return view('pages.backend.pedoman.edit', compact('pedoman'))->withTitle('Edit Pedoman');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(PedomanUpdate $request, $id)
	{
		/* make directory */
		Storage::makeDirectory('pedoman/dokumen');
		$file_dokumen = '';
		
		$pedoman = Pedoman::findOrFail(decrypt($id));
		$pedoman->judul = $request->input('judul');
		$pedoman->konten = $request->input('konten');

		if($request->hasFile('media_dokumen')){
			$file_dokumen = 'pedoman/dokumen/'.str_random(3).'.'.$request->file('media_dokumen')->getClientOriginalName();
			Storage::put($file_dokumen, file_get_contents($request->file('media_dokumen')));
		}else{
			$file_dokumen = str_replace("/storage/", "", $pedoman->media_dokumen);
		}

		$pedoman->media_dokumen = $file_dokumen != '' ? Storage::url($file_dokumen) : '';
		$pedoman->update();
		return redirect('admin/pedoman');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$pedoman = Pedoman::find(decrypt($id));
		Storage::delete($pedoman->media_dokumen);
		$pedoman->delete();

		$pedomans = Pedoman::orderBy('created_at','desc')->paginate(10);
		return view('pages.backend.pedoman._tablePedoman', compact('pedomans'));
	}
}
