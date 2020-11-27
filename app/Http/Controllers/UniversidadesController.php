<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universidade;
use App\Models\Favorito;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UniversidadesController extends Controller
{
    public function index(Request $user)
    {
        $user = Auth::User();
        $id = Auth::id();
        if(Auth::check()){
        $favorito = Favorito::where('user_id',$id)->get();
        $universidade = Universidade::all();
        return view('universidades',compact('user'))->with(compact('universidade'))->with(compact('favorito'));
        
    } else {
        $universidade = Universidade::all();    
        return view('universidades',compact('user'))->with(compact('universidade'));
    }
    }
}
