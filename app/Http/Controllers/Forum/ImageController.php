<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\UserControl\ForumUsers;
use App\Models\Forum\ThreadImage;

use App\Http\Requests\Forum\ImageThreadRequest;

use Storage;

class ImageController extends Controller
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
    public function store(ImageThreadRequest $request)
    {
        //
        Storage::makeDirectory('threadImage');
        $filename = 'threadImage/'.str_random(10).'.'.$request->file('image')->getClientOriginalExtension();

        Storage::put($filename, file_get_contents($request->file('image')));
        $image = ForumUsers::find(auth('forum')->user()->id)
                 ->newThreadImage()
                 ->withLocated(Storage::url($filename))
                 ->saveImage();

        $threadImages = ThreadImage::where('forum_user_id', auth('forum')->user()->id)->get();
        return view('pages.forum-fasilitator._tableImageThread', ['threadsImages' => $threadImages]);
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
    public function update(ImageThreadRequest $request, $id)
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
        $threadImage = ThreadImage::find(decrypt($id));
        Storage::delete($threadImage->located);
        $threadImage->delete();
        
        $threadImages = ThreadImage::where('forum_user_id', auth('forum')->user()->id)->get();
        return view('pages.forum-fasilitator._tableImageThread', ['threadsImages' => $threadImages]);
    }
}
