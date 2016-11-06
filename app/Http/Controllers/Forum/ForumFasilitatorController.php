<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Forum\Thread;
use App\Models\Forum\ThreadImage;
use App\Models\UserControl\ForumUsers;

use App\Http\Requests\Forum\ForumRequests;

use DB;

class ForumFasilitatorController extends Controller
{

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function __construct()
	{
		$this->middleware('auth:forum', ['except' => ['index', 'show', 'threads', 'guides']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		$threads = Thread::where('tipe', '=', 'umum')->orderBy('id', 'desc')->take(5)->get();
		// $threads = Thread::select(DB::raw('threads.*, count(*) as "aggregate"'))
		// 			  ->where('tipe', '=', 'umum')
		// 			  ->join('komentar', 'threads.id', '=', 'komentar.thread_id')
		// 			  ->groupBy('thread_id')
		// 			  ->orderBy('aggregate', 'desc')
		// 			  ->take(5)
		// 			  ->get();
		$guides = Thread::where('tipe', '=', 'guide')->orderBy('id', 'desc')->take(5)->get();
		return view('pages.forum-fasilitator.thread.index', compact('threads', 'guides'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		$threadImages = ThreadImage::where('forum_user_id', auth('forum')->user()->id)->get();
		return view('pages.forum-fasilitator.thread.create', ['threadsImages' => $threadImages]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ForumRequests $request)
	{
		//
		$thread = new Thread;
		$thread->forum_user_id = auth('forum')->user()->id;
		$thread->judulThread = $request->get('judul-thread');
		if(auth('forum')->user()->admin == 2){
			$thread->tipe = $request->get('tipe');
		}else{
			$thread->tipe = 'umum';
		}
		$thread->konten = $request->get('konten');
		$thread->save();
		return redirect()->route('thread.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id, $judul)
	{
		//
		$id = str_replace(config('app.salt'), '', base64_decode($id));
		$thread = Thread::where('id', $id)->orWhere('judulThread', 'like', str_replace('-', ' ', $judul))->first();
		$thread->comment()->count() > 0 ? $comments = $thread->comment()->paginate(10) : $comments = null;
		return view('pages.forum-fasilitator.thread.show', ['thread' => $thread, 'comments' => $comments]);
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
		$id = str_replace(config('app.salt'), '', base64_decode($id));
		$thread = Thread::find($id);
		$threadImages = ThreadImage::where('forum_user_id', auth('forum')->user()->id)->get();
		return view('pages.forum-fasilitator.thread.edit', ['thread' => $thread, 'threadsImages' => $threadImages]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(ForumRequests $request, $id)
	{
		//
		$thread = Thread::find(decrypt($id));
		$thread->forum_user_id = auth('forum')->user()->id;
		$thread->judulThread = $request->get('judul-thread');
		if(auth('forum')->user()->admin == 2){
			$thread->tipe = $request->get('tipe');
		}else{
			$thread->tipe = 'umum';
		}
		$thread->konten = $request->get('konten');
		$thread->update();
		return redirect()->route('thread.index');
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
		$threads = $user->thread()->onlyThread()->paginate(10);
		return view('pages.forum-fasilitator.profile._table', compact('user', 'threads'));
	}

	public function deleteGuides($id)
	{
		$thread = Thread::find(decrypt($id));
		$thread->delete();

		$guides = Thread::where('tipe', '=', 'guide')->paginate(20);
		return view('pages.forum-fasilitator.thread._tableGuides', compact('guides'));
	}

	public function deleteThreads($id)
	{
		$thread = Thread::find(decrypt($id));
		$thread->delete();

		$threads = Thread::select(DB::raw('threads.*, count(*) as "aggregate"'))
					  ->where('tipe', '=', 'umum')
					  ->join('komentar', 'threads.id', '=', 'komentar.thread_id')
					  ->groupBy('thread_id')
					  ->orderBy('aggregate', 'desc')
					  ->paginate(20);
		return view('pages.forum-fasilitator.thread._tableThreads', compact('threads'));
	}

	public function threads()
	{
		//
		// $threads = Thread::select(DB::raw('threads.*, count(*) as "aggregate"'))
		// 			  ->where('tipe', '=', 'umum')
		// 			  ->join('komentar', 'threads.id', '=', 'komentar.thread_id')
		// 			  ->groupBy('thread_id')
		// 			  ->orderBy('aggregate', 'desc')
		// 			  ->paginate(20);

		$threads = Thread::where('tipe', '=', 'umum')->orderBy('id', 'desc')->take(5)->get();

		return view('pages.forum-fasilitator.thread.threads', compact('threads'));
	}

	public function guides()
	{
		//
		$guides = Thread::where('tipe', '=', 'guide')->paginate(20);

		return view('pages.forum-fasilitator.thread.guides', compact('guides'));
	}
}
