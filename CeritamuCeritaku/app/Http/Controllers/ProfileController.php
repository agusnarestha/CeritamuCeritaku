<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;

class ProfileController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::where('id_user',Auth::user()->id)->first();
        return view('layouts.show_profile',compact('profile'));
        // echo ($profile->id_user);
        // echo ($profile->instagram);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::where('id_user',Auth::user()->id)->first();
        return view('layouts.edit_profile',compact('profile'));
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
        $request->validate([
            'bio' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $profile = Profile::findorfail($id);

        $data =[
            "bio" => $request->bio,
            "instagram" => $request->instagram,
            "twitter" => $request->twitter,
            "tgl_lahir" => $request->tgl_lahir,
            'id_user' => Auth::id()
        ];
        // dd($data);
        $profile->update($data);
        return redirect('/profile/{{Auth::id()}}')->with('edit','post berhasil di edit');
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
