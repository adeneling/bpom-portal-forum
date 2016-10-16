<?php

namespace App\Http\Controllers\Back\Program;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Program\Program;
use Auth;
use Storage;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::orderBy('created_at','desc')->get();
        return view('pages.backend.program.index', compact('programs'))->withTitle('Kelola Program');
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);
        /* make directory */
        Storage::makeDirectory('program/foto');
        Storage::makeDirectory('program/video');
        Storage::makeDirectory('program/dokumen');
        $file_foto = '';
        $file_video = '';
        $file_dokumen = '';
        if($request->hasFile('media_foto')){
            $file_foto = 'program/foto/'.str_random(10).'.'.$request->file('media_foto')->getClientOriginalExtension();
            Storage::put($file_foto, file_get_contents($request->file('media_foto')));
        }
        if($request->hasFile('media_video')){
            $file_video = 'program/video/'.str_random(10).'.'.$request->file('media_video')->getClientOriginalExtension();
            Storage::put($file_video, file_get_contents($request->file('media_video')));
        }
        if($request->hasFile('media_dokumen')){
            $file_dokumen = 'program/dokumen/'.str_random(10).'.'.$request->file('media_dokumen')->getClientOriginalExtension();
            Storage::put($file_dokumen, file_get_contents($request->file('media_dokumen')));
        }

        $program = new Program;
        $program->user_id = Auth::user()->id;
        $program->nama = $request->input('nama');
        $program->deskripsi = $request->input('deskripsi');
        $program->media_foto = !is_null($file_foto) ? Storage::url($file_foto) : '';
        $program->media_video = !is_null($file_video) ? Storage::url($file_video) : '';
        $program->media_dokumen = !is_null($file_dokumen) ? Storage::url($file_dokumen) : '';
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);
        /* make directory */
        Storage::makeDirectory('program/foto');
        Storage::makeDirectory('program/video');
        Storage::makeDirectory('program/dokumen');
        $file_foto = '';
        $file_video = '';
        $file_dokumen = '';
        if($request->hasFile('media_foto')){
            $file_foto = 'program/foto/'.str_random(10).'.'.$request->file('media_foto')->getClientOriginalExtension();
            Storage::put($file_foto, file_get_contents($request->file('media_foto')));
        }
        if($request->hasFile('media_video')){
            $file_video = 'program/video/'.str_random(10).'.'.$request->file('media_video')->getClientOriginalExtension();
            Storage::put($file_video, file_get_contents($request->file('media_video')));
        }
        if($request->hasFile('media_dokumen')){
            $file_dokumen = 'program/dokumen/'.str_random(10).'.'.$request->file('media_dokumen')->getClientOriginalExtension();
            Storage::put($file_dokumen, file_get_contents($request->file('media_dokumen')));
        }
        
        $program = Program::findOrFail($id);
        $program->nama = $request->input('nama');
        $program->deskripsi = $request->input('deskripsi');
        $program->media_foto = !is_null($file_foto) ? Storage::url($file_foto) : '';
        $program->media_video = !is_null($file_video) ? Storage::url($file_video) : '';
        $program->media_dokumen = !is_null($file_dokumen) ? Storage::url($file_dokumen) : '';
        $program->save();
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
        $program = Program::find($id);
        Program::find($id)->delete();
        return redirect('admin/program');
    }
}
