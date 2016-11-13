<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Polling\Polling;

class PollingController extends Controller
{
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
		$poll = new Polling;
		$poll->ip = decrypt($request->get('ip'));
		$poll->polling = $request->get('star');
		$poll->komentar = $request->get('masukan');
		$poll->save();

		$data = [
			'star1' => Polling::count() != 0 ? (Polling::where('polling', '=', 1)->count()/Polling::count())*100 : 0,
            'star2' => Polling::count() != 0 ? (Polling::where('polling', '=', 2)->count()/Polling::count())*100 : 0,
            'star3' => Polling::count() != 0 ? (Polling::where('polling', '=', 3)->count()/Polling::count())*100 : 0,
            'star4' => Polling::count() != 0 ? (Polling::where('polling', '=', 4)->count()/Polling::count())*100 : 0,
            'star5' => Polling::count() != 0 ? (Polling::where('polling', '=', 5)->count()/Polling::count())*100 : 0,
		];

		return view('pages.frontend.beranda._polling', $data);
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
