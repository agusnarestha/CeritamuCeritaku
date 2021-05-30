<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cerita;
use App\Komentar;
use App\Profile;
use App\User;
use App\Like;

use Auth;
use File;
use DB;

class CeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cerita = User::find(Auth::id())->cerita;
        // $cerita = Cerita::all();

        return view('cerita.index', compact('cerita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cerita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'sipnosis' => 'required',
            'isi_cerita' => 'required',
            'genre' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png'
        ]);
        $gambar = $request->gambar;
        $name_img = time() . ' - ' . $gambar->getClientOriginalName();

        Cerita::create([
            'judul' => $request->judul,
            'sipnosis' => $request->sipnosis,
            'isi_cerita' => $request->isi_cerita,
            'genre' => $request->genre,
            'gambar' => $name_img,
            'user_id' => Auth::id()
        ]);

        $gambar->move('img', $name_img);
        return redirect('/cerita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $cerita = Cerita::where('id',$id)->first();
        $user = User::where('id',$cerita->user_id)->first();
        $profile = Profile::where('id_user',$user->id)->first();
        $komentar = Komentar::where('cerita_id',$cerita->id)->get();
        $countlike = Like::where('cerita_id', $cerita->id)->count();
        // $userK = User::where('id',$komentar->user_id)->first();
        return view('cerita.show',compact('cerita','user','profile','komentar','countlike'));
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cerita = Cerita::where('id',$id)->first();
        return view('cerita.edit',compact('cerita'));
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
        $this->validate($request, [
            'judul' => 'required',
            'sipnosis' => 'required',
            'isi_cerita' => 'required',
            'genre' => 'required',
            'gambar' => 'mimes:jpeg,jpg,png'
        ]);
        $cerita = Cerita::findorfail($id);
        if ($request->has('gambar')) {
            $path= "img/";
            File::delete($path . $cerita->gambar);
            $gambar= $request->gambar;
            $name_img = time() .'-' . $gambar->getClientOriginalName();
            $gambar->move('img' , $name_img);
            $data = [
                'judul' => $request->judul,
                'sipnosis' => $request->sipnosis,
                'isi_cerita' => $request->isi_cerita,
                'genre' => $request->genre,
                'gambar' => $name_img,
                'user_id' => Auth::id()
            ];

        }else{
            $data =[
                'judul' => $request->judul,
                'sipnosis' => $request->sipnosis,
                'isi_cerita' => $request->isi_cerita,
                'genre' => $request->genre,
                'user_id' => Auth::id()
            ];
        }
        $cerita->update($data);
        return redirect('/cerita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cerita = Cerita::findorfail($id);
        $cerita->delete();

        $path = "img/";
        File::delete($path . $cerita->gambar);

        return redirect('/cerita');
    }

    public function beranda(){
        $cerita = Cerita::all();
        return view('cerita.beranda', compact('cerita'));
    }

    public function berikomentar(Request $request){
        Komentar::create([
            'isi_komentar' => $request["komentar"],
            'user_id' => $request["user_id"],
            'cerita_id' => $request["cerita_id"],
            'nama' => $request["name"]
        ]);
        return back();
    }

    public function berilike(Request $request){
        $inilike = Like::where('cerita_id',$request["cerita_idl"])->where('user_id',$request["user_idl"])->first();
        if ($inilike == NULL){
            Like::create([
                'cerita_id' => $request["cerita_idl"],
                'user_id' => $request["user_idl"]
            ]);
        }else{
            $inilike->delete();
        }
        return back();
    }

}
