<?php

namespace App\Http\Controllers\Back\PasarAman;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Alamat\Provinsi;
use App\Models\Alamat\Kota;
use App\Models\Alamat\Kecamatan;
use App\Models\PasarAman\PasarAman;

use App\Http\Requests\PasarAman\PasarAmanStore;

use Storage;

class PasarAmanController extends Controller
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
        //
        return view('pages.backend.pasar-aman.index')->withTitle('Kelola Pasar Aman');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $provinces = Provinsi::all();
        return view('pages.backend.pasar-aman.create', compact('provinces'))->withTitle('Tambah Pasar Aman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasarAmanStore $request)
    {
        //
        Storage::makeDirectory('pasarAman');
        $filename = '';
        if($request->hasFile('photo')){
            $filename = 'pasarAman/'.str_random(10).'.'.$request->file('photo')->getClientOriginalExtension();
            Storage::put($filename, file_get_contents($request->file('photo')));
        }

        $pasarAman = new PasarAman;
        $pasarAman->user_id = auth()->user()->id;
        $pasarAman->photo = !is_null($filename) ? Storage::url($filename) : '';
        $pasarAman->nama_pasar = $request->get('nama_pasar');
        $pasarAman->kepala_pasar = $request->get('kepala_pasar');
        $pasarAman->petugas_pasar = $request->get('petugas_pasar');
        $pasarAman->alamat_pasar = $request->get('alamat_pasar');
        $pasarAman->provinsi_id = !is_null($request->get('province')) ? decrypt($request->get('province')) : NULL;
        $pasarAman->kota_id = !is_null($request->get('city')) ? decrypt($request->get('city')) : NULL;
        $pasarAman->kecamatan_id = !is_null($request->get('subdistrict')) ? decrypt($request->get('subdistrict')) : NULL;
        $pasarAman->save();

        return view('pages.backend.pasar-aman.index')->withTitle('Kelola Pasar Aman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PasarAmanStore $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCity($province_id)
    {
        $cities = Kota::where('provinsi_id', '=', decrypt($province_id))->orderBy('tipe')->get();
        return view('pages.backend.pasar-aman._city', compact('cities'));
    }

    public function getSubdistrict($province_id, $city_id)
    {
        $subdistricts = Kecamatan::where('provinsi_id', '=', decrypt($province_id))->where('kota_id', '=', decrypt($city_id))->orderBy('tipe')->get();
        return view('pages.backend.pasar-aman._subdistrict', compact('subdistricts'));
    }
}
