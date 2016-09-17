<?php

namespace App\Http\Controllers\Back\UserControl;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\UserControl\Role;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::all();
        return view('pages.backend.userControl.groups.index', ['roles' => $roles])->withTitle('Groups');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.backend.userControl.groups.create')->withTitle('Groups');
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
        $role = new Role;
        $role->name = $request->get('name');
        $role->display_name = $request->get('display_name');
        $role->description = $request->get('deskripsi');
        $role->save();

        return view('pages.backend.userControl.groups._tableGroup', ['roles' => Role::all()]);
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
        $role = Role::find(decrypt($id));

        return view('pages.backend.userControl.groups.edit', ['role' => $role]);
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
        $role = Role::findOrFail(decrypt($id));
        $role->name = $request->get('name');
        $role->display_name = $request->get('display_name');
        $role->description = $request->get('deskripsi');
        $role->save();

        return view('pages.backend.userControl.groups._tableGroup', ['roles' => Role::all()]);

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
        $role = Role::find(decrypt($id));
        $role->delete();

        return view('pages.backend.userControl.groups._tableGroup', ['roles' => Role::all()]); 
    }
}
