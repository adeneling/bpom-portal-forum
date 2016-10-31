<?php

namespace App\Http\Controllers\Back\Galeri;

use Illuminate\Http\Request;
use Auth;
use Storage;
use App\Http\Requests;
use App\Http\Requests\Galeri\GaleriRequest;
use App\Http\Controllers\Controller;
use App\Models\Galeri\Galeri;

class GaleriController extends Controller
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
        $galeris = Galeri::orderBy('created_at','desc')->get();
        return view('pages.backend.galeri.index', compact('galeris'))->withTitle('Kelola Galeri');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.backend.galeri.create')->withTitle('Tambah Galeri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaleriRequest $request)
    {
        /* make directory */
        Storage::makeDirectory('galeri/foto');
        $file_foto = '';
        if($request->hasFile('foto')){
            $file_foto = 'galeri/foto/'.str_random(10).'.'.$request->file('foto')->getClientOriginalExtension();
            Storage::put($file_foto, file_get_contents($request->file('foto')));
        }
        $galeri = new Galeri;
        $galeri->user_id = Auth::user()->id;
        $galeri->judul = $request->input('judul');
        $galeri->foto = !is_null($file_foto) ? Storage::url($file_foto) : '';
        $galeri->save();

        $galeris = Galeri::orderBy('created_at','desc')->get();
        return view('pages.backend.galeri._tableGaleri', compact('galeris'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeri = Galeri::findOrFail(decrypt($id));
        return view('pages.backend.galeri.show', compact('galeri'))->withTitle('Lihat Foto');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail(decrypt($id));
        return view('pages.backend.galeri.edit', compact('galeri'))->withTitle('Edit Foto');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GaleriRequest $request, $id)
    {
        /* make directory */
        Storage::makeDirectory('galeri/foto');
        $file_foto = '';
        if($request->hasFile('media_foto')){
            $file_foto = 'galeri/foto/'.str_random(10).'.'.$request->file('media_foto')->getClientOriginalExtension();
            Storage::put($file_foto, file_get_contents($request->file('media_foto')));
        }
        
        $galeri = Galeri::findOrFail($id);
        $galeri->judul = $request->input('judul');
        $galeri->located = $request->input('located');
        $galeri->keterangan = $request->input('keterangan');
        $galeri->media_foto = !is_null($file_foto) ? Storage::url($file_foto) : '';
        $galeri->save();
        return redirect('admin/galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        Storage::delete($galeri->foto);
        $galeri->delete();
        return redirect('admin/galeri');
    }
}
