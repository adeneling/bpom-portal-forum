<?php

namespace App\Http\Controllers\Back\Berita;

use Illuminate\Http\Request;
use Auth;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Berita\Berita;

class BeritaController extends Controller
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
        $beritas = Berita::orderBy('created_at','desc')->get();
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
        ]);
        /* make directory */
        Storage::makeDirectory('berita/foto');
        Storage::makeDirectory('berita/video');
        Storage::makeDirectory('berita/dokumen');
        $file_dokumen = '';
        $file_foto = '';
        $file_video = '';
        if($request->hasFile('media_dokumen')){
            $file_dokumen = 'berita/dokumen/'.str_random(10).'.'.$request->file('media_dokumen')->getClientOriginalExtension();
            Storage::put($file_dokumen, file_get_contents($request->file('media_dokumen')));
        }
        if($request->hasFile('media_foto')){
            $file_foto = 'berita/foto/'.str_random(10).'.'.$request->file('media_foto')->getClientOriginalExtension();
            Storage::put($file_foto, file_get_contents($request->file('media_foto')));
        }
        if($request->hasFile('media_video')){
            $file_video = 'berita/video/'.str_random(10).'.'.$request->file('media_video')->getClientOriginalExtension();
            Storage::put($file_video, file_get_contents($request->file('media_video')));
        }

        $berita = new Berita;
        $berita->user_id = Auth::user()->id;
        $berita->judul = $request->input('judul');
        $berita->konten = $request->input('konten');
        $berita->media_dokumen = !is_null($file_dokumen) ? Storage::url($file_dokumen) : '';
        $berita->media_foto = !is_null($file_foto) ? Storage::url($file_foto) : '';
        $berita->media_video = !is_null($file_video) ? Storage::url($file_video) : '';
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
        ]);
        /* make directory */
        Storage::makeDirectory('berita/foto');
        Storage::makeDirectory('berita/video');
        Storage::makeDirectory('berita/dokumen');
        $file_dokumen = '';
        $file_foto = '';
        $file_video = '';
        if($request->hasFile('media_dokumen')){
            $file_dokumen = 'berita/dokumen/'.str_random(10).'.'.$request->file('media_dokumen')->getClientOriginalExtension();
            Storage::put($file_dokumen, file_get_contents($request->file('media_dokumen')));
        }
        if($request->hasFile('media_foto')){
            $file_foto = 'berita/foto/'.str_random(10).'.'.$request->file('media_foto')->getClientOriginalExtension();
            Storage::put($file_foto, file_get_contents($request->file('media_foto')));
        }
        if($request->hasFile('media_video')){
            $file_video = 'berita/video/'.str_random(10).'.'.$request->file('media_video')->getClientOriginalExtension();
            Storage::put($file_video, file_get_contents($request->file('media_video')));
        }
        
        $berita = Berita::findOrFail($id);
        $berita->judul = $request->input('judul');
        $berita->konten = $request->input('konten');
        $berita->media_dokumen = !is_null($file_dokumen) ? Storage::url($file_dokumen) : '';
        $berita->media_foto = !is_null($file_foto) ? Storage::url($file_foto) : '';
        $berita->media_video = !is_null($file_video) ? Storage::url($file_video) : '';
        $berita->save();
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
        $berita = Berita::find($id);
        Berita::find($id)->delete();
        return redirect('admin/berita');
    }
}
