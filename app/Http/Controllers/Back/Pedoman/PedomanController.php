<?php

namespace App\Http\Controllers\Back\Pedoman;

use Illuminate\Http\Request;
use Auth;
use Storage;
use App\Http\Requests;
use App\Http\Requests\Pedoman\PedomanRequest;
use App\Http\Controllers\Controller;
use App\Models\Requests\Pedoman\Pedoman;

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
        $pedomans = Pedoman::orderBy('created_at','desc')->get();
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
    public function store(PedomanRequest $request)
    {
        /* make directory */
        Storage::makeDirectory('pedoman/dokumen');
        $file_dokumen = '';
        if($request->hasFile('media_dokumen')){
            $file_dokumen = 'pedoman/dokumen/'.str_random(10).'.'.$request->file('media_dokumen')->getClientOriginalExtension();
            Storage::put($file_dokumen, file_get_contents($request->file('media_dokumen')));
        }

        $pedoman = new Pedoman;
        $pedoman->user_id = Auth::user()->id;
        $pedoman->judul = $request->input('judul');
        $pedoman->konten = $request->input('konten');
        $pedoman->media_dokumen = !is_null($file_dokumen) ? Storage::url($file_dokumen) : '';
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
    public function update(PedomanRequest $request, $id)
    {
        /* make directory */
        Storage::makeDirectory('pedoman/dokumen');
        $file_dokumen = '';
        if($request->hasFile('media_dokumen')){
            $file_dokumen = 'pedoman/dokumen/'.str_random(10).'.'.$request->file('media_dokumen')->getClientOriginalExtension();
            Storage::put($file_dokumen, file_get_contents($request->file('media_dokumen')));
        }
        
        $pedoman = Pedoman::findOrFail($id);
        $pedoman->judul = $request->input('judul');
        $pedoman->konten = $request->input('konten');
        $pedoman->media_dokumen = !is_null($file_dokumen) ? Storage::url($file_dokumen) : '';
        $pedoman->save();
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
        $pedoman = Pedoman::find($id);
        Pedoman::find($id)->delete();
        return redirect('admin/pedoman');
    }
}
