<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\UserControl\ForumUsers;
use App\Models\Forum\Thread;

use App\Helpers\AppHelpers;

use Storage;

class ProfileController extends Controller
{
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function __construct()
	{
		$this->middleware('auth:forum');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		$user = ForumUsers::find(auth('forum')->user()->id);
		return view('pages.forum-fasilitator.profile.index', ['user' => $user]);
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
		$user = ForumUsers::find(decrypt($id));
		return view('pages.forum-fasilitator.profile.edit', ['user' => $user]);
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
		Storage::makeDirectory('forum_users');

		$user = ForumUsers::find(decrypt($id));
		$user->name = $request->get('namaLengkap');
		$user->password = bcrypt($request->get('password'));
		
		if($request->hasFile('image')){
			$filename = 'forum_users/'.str_random(10).'.'.$request->file('image')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('image')));
			$user->photo = Storage::url($filename);
		}else{
			$user->photo = AppHelpers::photoProfile($user->email);
		}

		$user->update();

		$user = ForumUsers::find(auth('forum')->user()->id);
		return view('pages.forum-fasilitator.profile.index', ['user' => $user]);
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
		$thread = Thread::find(decrypt($id));
		$thread->delete();

		$user = ForumUsers::find(auth('forum')->user()->id);
		return view('pages.forum-fasilitator.profile._table', compact('user'));
	}
}
