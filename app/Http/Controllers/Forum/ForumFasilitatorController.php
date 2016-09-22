<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Forum\Thread;

use App\Http\Requests\Forum\ForumRequests;

class ForumFasilitatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $threads = Thread::all();
        return view('pages.forum-fasilitator.index', ['threads' => $threads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.forum-fasilitator.create');
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
        $thread->tipe = "umum";
        $thread->konten = $request->get('konten');
        $thread->save();
        return redirect('forum-fasilitator');
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
        return view('pages.forum-fasilitator.show');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showThread($id, $judul)
    {
        //
        $id = str_replace(config('app.salt'), '', base64_decode($id));
        $thread = Thread::where('id', $id)->where('judulThread', 'like', str_replace('-', ' ', $judul))->first();
        return view('pages.forum-fasilitator.show', ['thread' => $thread]);
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
