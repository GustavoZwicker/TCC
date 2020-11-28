<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Models\Universidade;
use Illuminate\Support\Facades\Auth;

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
        $universidade = Universidade::all();
        $user = Auth::User();
        $id = Auth::id();
        $fav = Favorito::where('user_id',$id)->get();
        $filt = Universidade::all()->toArray();
        $universidade = Universidade::all();
        $filtro['id'] = array_column($filt, 'id');
  
        return view('home',compact('user'))->with(compact('universidade'))->with(compact('fav'))->with(compact('filtro'));
    }
}