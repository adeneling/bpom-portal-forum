<?php

namespace App\Http\Controllers\Back\BahanBerbahaya;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\BahanBerbahaya\BahanBerbahaya;
use Auth;

class BahanBerbahayaController extends Controller
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);
        $bahan = new BahanBerbahaya;
        $bahan->user_id = Auth::user()->id;
        $bahan->nama = $request->input('nama');
        $bahan->deskripsi = $request->input('deskripsi');
        $bahan->media_foto = $request->input('media_foto');
        $bahan->media_video = $request->input('media_video');
        $bahan->media_dokumen = $request->input('media_dokumen');
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
        return view('pages.backend.bahan-berbahaya.show', compact('bahanBerbahaya'));
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);
        $bahanBerbahaya = BahanBerbahaya::findOrFail($id);
        $bahanBerbahaya->nama = $request->input('nama');
        $bahanBerbahaya->deskripsi = $request->input('deskripsi');
        $bahanBerbahaya->media_foto = $request->input('media_foto');
        $bahanBerbahaya->media_video = $request->input('media_video');
        $bahanBerbahaya->media_dokumen = $request->input('media_dokumen');
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
