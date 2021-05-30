<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cerita;
use App\User;
use App\Like;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    }
    public function welcome()
    {
        $ceritas = User::find(Auth::id())->cerita;
        $countcerita = Cerita::where('user_id',Auth::id())->count();
        return view('layouts.welcome',compact('ceritas','countcerita'));
    }

    public function about_us(){
        return view('layouts.about_us');
    }
}
