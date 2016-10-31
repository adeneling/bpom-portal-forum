<?php

namespace App\Http\Controllers\Back\BahanBerbahaya;

use Illuminate\Http\Request;
use Illuminate\Http\BahanBerbahaya\BahanBerbahayaRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\BahanBerbahaya\BahanBerbahaya;
use Auth;
use Storage;

class BahanBerbahayaController extends Controller
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
        $bahanBerbahaya = BahanBerbahaya::orderBy('created_at','desc')->get();
        return view('pages.backend.bahan-berbahaya.index', compact('bahanBerbahaya'))->withTitle('Kelola Bahan Berbahaya');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.bahan-berbahaya.create')->withTitle('Tambah Bahan Berbahaya');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BahanBerbahayaRequest $request)
    {
        /* make directory */
        Storage::makeDirectory('bahan-berbahaya/foto');
        $file_foto = '';
        if($request->hasFile('media_foto')){
            $file_foto = 'bahan-berbahaya/foto/'.str_random(10).'.'.$request->file('media_foto')->getClientOriginalExtension();
            Storage::put($file_foto, file_get_contents($request->file('media_foto')));
        }
        $bahan = new BahanBerbahaya;
        $bahan->user_id = Auth::user()->id;
        $bahan->nama = $request->input('nama');
        $bahan->deskripsi = $request->input('deskripsi');
        $bahan->media_foto = !is_null($file_foto) ? Storage::url($file_foto) : '';
        $bahan->save();
        return redirect('admin/bahan-berbahaya');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bahanBerbahaya = BahanBerbahaya::findOrFail(decrypt($id));
        return view('pages.backend.bahan-berbahaya.show', compact('bahanBerbahaya'))->withTitle('Lihat Bahan Berbahaya');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bahanBerbahaya = BahanBerbahaya::findOrFail(decrypt($id));
        return view('pages.backend.bahan-berbahaya.edit', compact('bahanBerbahaya'))->withTitle('Edit Bahan Berbahaya');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BahanBerbahayaRequest $request, $id)
    {
        /* make directory */
        Storage::makeDirectory('bahan-berbahaya/foto');
        $file_foto = '';
        if($request->hasFile('media_foto')){
            $file_foto = 'bahan-berbahaya/foto/'.str_random(10).'.'.$request->file('media_foto')->getClientOriginalExtension();
            Storage::put($file_foto, file_get_contents($request->file('media_foto')));
        }
        
        $bahanBerbahaya = BahanBerbahaya::findOrFail($id);
        $bahanBerbahaya->nama = $request->input('nama');
        $bahanBerbahaya->deskripsi = $request->input('deskripsi');
        $bahanBerbahaya->media_foto = !is_null($file_foto) ? Storage::url($file_foto) : '';
        $bahanBerbahaya->save();
        return redirect('admin/bahan-berbahaya');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bahanBerbahaya = BahanBerbahaya::find($id);
        BahanBerbahaya::find($id)->delete();
        return redirect('admin/bahan-berbahaya');
    }
}
