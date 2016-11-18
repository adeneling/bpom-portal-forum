<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\PasarAman\PasarAman;
use App\Models\Remote\Pasar;

use App\Helpers\PasarHelpers;

class PasarAmanController extends Controller
{
	public function pasarPengawasan()
	{
		$pasars = PasarAman::where('aman', '=', 'tidak aman')->orderBy('created_at','desc')->paginate(10);
        return view('pages.frontend.pasar-aman.pasar-pengawasan', compact('pasars'));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$pasar = new PasarHelpers;
		$periode = $pasar->periode();
		$pasars = PasarAman::where('aman', '=', 'aman')->orderBy('created_at','desc')->paginate(10);
        return view('pages.frontend.pasar-aman.index', compact('pasars', 'periode'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id, $namaPasar)
	{
		//
		$id = str_replace(config('app.salt'), '', base64_decode($id));
		$pasar = Pasar::where('kode_pasar', '=', $id)->orWhere('nama_pasar', 'like', str_replace('-', ' ', $namaPasar))->first();

		return view('pages.frontend.pasar-aman.show', compact('pasar'));
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
	public function update(Request $request, $id)
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
}
