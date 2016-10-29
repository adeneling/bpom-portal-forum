<?php

namespace App\Http\Controllers\Back\ForumUsers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\UserControl\ForumUsers;
use Storage;

class ForumUsersController extends Controller
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
		$penggunaForum = ForumUsers::all();
		return view('pages.backend.forum-users.index', compact('penggunaForum'))->withTitle('Kelola Pengguna Forum');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('pages.backend.forum-users.create')->withTitle('Tambah Pengguna Forum');
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
		Storage::makeDirectory('forum_users');
		$filename = '';
		if($request->hasFile('photo')){
			$filename = 'forum_users/'.str_random(10).'.'.$request->file('photo')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('photo')));
		}

		$user = new ForumUsers;
		$user->name = $request->get('name');
		$user->photo = !is_null($filename) ? Storage::url($filename) : '';
		$user->email = $request->get('email');
		$user->password = bcrypt($request->get('password'));
		$user->admin = 1;
		$user->save();

		$penggunaForum = ForumUsers::all();
		return view('pages.backend.forum-users.index', compact('penggunaForum'))->withTitle('Kelola Pengguna Forum');
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

		return view('pages.backend.forum-users.edit', compact('user'))->withTitle('Ubah Pengguna Forum');
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
		$filename = '';

		$user = ForumUsers::find(decrypt($id));
		$user->name = $request->get('name');

		if($request->hasFile('photo')){
			$filename = 'forum_users/'.str_random(10).'.'.$request->file('photo')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('photo')));
		}else{
			$filename = str_replace("/storage/", "", $user->photo);
		}

		$user->photo = !is_null($filename) ? Storage::url($filename) : '';
		$user->email = $request->get('email');
		$user->password = bcrypt($request->get('password'));
		$user->update();

		return redirect()->route('admin.pengguna-forum.index');
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
		$user = ForumUsers::find(decrypt($id));
		Storage::delete($user->photo);
		$user->delete();

		$penggunaForum = ForumUsers::all();
		return view('pages.backend.forum-users._table_pengguna_forum', compact('penggunaForum'));
	}

	public function admin($id, $isadmin)
	{
		$ForumUsers = ForumUsers::find(decrypt($id));
		$ForumUsers->admin = $isadmin;
		$ForumUsers->update();

		$penggunaForum = ForumUsers::all();
		return view('pages.backend.forum-users._table_pengguna_forum', compact('penggunaForum'));
	}
}
