<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $universidade = Universidade::get();
        $user = Auth::User();
        return view('home',compact('user'))->with('universidades',$universidade);
    }
}
