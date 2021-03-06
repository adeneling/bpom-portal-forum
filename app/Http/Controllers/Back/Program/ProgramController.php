<?php

namespace App\Http\Controllers\Back\Program;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\Program\ProgramStore;
use App\Http\Requests\Program\ProgramUpdate;

use App\Http\Controllers\Controller;

use App\Models\Program\Program;
use App\Models\Program\ProgramDokumen;
use Auth;
use Storage;
use DB;

class ProgramController extends Controller
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
		$programs = Program::orderBy('created_at','desc')->paginate(10);
		$dokumens = ProgramDokumen::orderBy('created_at','desc')->paginate(10);
		return view('pages.backend.program.index', compact('programs','dokumens'))->withTitle('Kelola Program');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('pages.backend.program.create')->withTitle('Tambah Program');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ProgramStore $request)
	{
		/* make directory */
		Storage::makeDirectory('program/foto');
		$file_foto = '';
		if($request->hasFile('media_foto')){
			$file_foto = 'program/foto/'.str_random(10).'.'.$request->file('media_foto')->getClientOriginalName();
			Storage::put($file_foto, file_get_contents($request->file('media_foto')));
		}

		$program = new Program;
		$program->user_id = Auth::user()->id;
		$program->nama = $request->input('nama');
		$program->deskripsi = $request->input('deskripsi');
		$program->media_foto = $file_foto != '' ? Storage::url($file_foto) : '';
		$program->save();
		return redirect('admin/program');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$program = Program::findOrFail(decrypt($id));
		return view('pages.backend.program.show', compact('program'))->withTitle('Lihat Program');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$program = Program::findOrFail(decrypt($id));
		return view('pages.backend.program.edit', compact('program'))->withTitle('Edit Program');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(ProgramUpdate $request, $id)
	{
		/* make directory */
		Storage::makeDirectory('program/foto');
		$file_foto = '';
		
		
		$program = Program::findOrFail(decrypt($id));
		$program->nama = $request->input('nama');
		$program->deskripsi = $request->input('deskripsi');

		if($request->hasFile('media_foto')){
            $file_foto = 'program/foto/'.str_random(10).'.'.$request->file('media_foto')->getClientOriginalName();
            Storage::put($file_foto, file_get_contents($request->file('media_foto')));
        }else{
        	$file_foto = str_replace("/storage/", "", $program->media_foto);
        }

		$program->media_foto = $file_foto != '' ? Storage::url($file_foto) : '';
		$program->update();

		return redirect('admin/program');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$program = Program::find(decrypt($id));
		Storage::delete($program->media_foto);
		$program->delete();

		$programs = Program::orderBy('created_at','desc')->paginate(10);
		return view('pages.backend.program._tableProgram', compact('programs'));
	}

	public function enabled($id, $isenabled)
	{
		//
		$disabled_all = DB::table('program')->update(array('isenabled' => 0));

		$program = Program::find(decrypt($id));
		$program->isenabled = 1;
		$program->update();

		$programs = Program::orderBy('created_at','desc')->paginate(10);
		return view('pages.backend.program._tableProgram', compact('programs'));
	}
}