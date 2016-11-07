<?php

namespace App\Http\Controllers\Back\Program;

use Illuminate\Http\Request;
use App\Http\Requests\Program\ProgramDokumenRequest;
use App\Http\Controllers\Controller;
use App\Models\Program\ProgramDokumen;
use Auth;
use Storage;

class ProgramDokumenController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.program.dokumen.create')->withTitle('Tambah Dokumen Program');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramDokumenRequest $request)
    {
        /* make directory */
        Storage::makeDirectory('program/dokumen');
        $file = '';
        if($request->hasFile('file')){
            $file = 'program/dokumen/'.str_random(10).'.'.$request->file('file')->getClientOriginalExtension();
            Storage::put($file, file_get_contents($request->file('file')));
        }

        $dokumen = new ProgramDokumen;
        $dokumen->user_id = Auth::user()->id;
        $dokumen->nama = $request->input('nama');
        $dokumen->deskripsi = $request->input('deskripsi');
        $dokumen->file = !is_null($file) ? Storage::url($file) : '';
        $dokumen->save();
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
        $dokumen = ProgramDokumen::findOrFail(decrypt($id));
        return view('pages.backend.program.dokumen.show', compact('dokumen'))->withTitle('Lihat Dokumen');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokumen = ProgramDokumen::findOrFail(decrypt($id));
        return view('pages.backend.program.dokumen.edit', compact('dokumen'))->withTitle('Edit Dokumen Program');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramDokumenRequest $request, $id)
    {
        /* make directory */
        Storage::makeDirectory('program/dokumen');
        $file = '';        
        
        $dokumen = ProgramDokumen::findOrFail($id);
        $dokumen->nama = $request->input('nama');
        $dokumen->deskripsi = $request->input('deskripsi');

        if($request->hasFile('file')){
            $file = 'program/dokumen/'.str_random(10).'.'.$request->file('file')->getClientOriginalExtension();
            Storage::put($file, file_get_contents($request->file('file')));
        }else{
            $file = str_replace("/storage/", "", $dokumen->file);
        }

        $dokumen->file = !is_null($file) ? Storage::url($file) : '';
        $dokumen->save();
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
        $dokumen = ProgramDokumen::find($id);
        ProgramDokumen::find($id)->delete();
        return redirect('admin/program');
    }
}
