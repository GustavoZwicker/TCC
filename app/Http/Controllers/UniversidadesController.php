<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universidade;
use App\Models\Favorito;
use Illuminate\Support\Facades\Auth;

class UniversidadesController extends Controller
{
    public function index(Request $user)
    {
        $user = Auth::User();
        $id = Auth::id();
        if(Auth::check()){
        $fav = Favorito::where('user_id',$id)->get()->toArray();
        $universidade = Universidade::all();
        $favorito['user_id'] = array_column($fav, 'user_id');
        $favorito['universidade_id'] = array_column($fav, 'universidade_id');
        return view('universidades',compact('user'))->with(compact('universidade'))->with(compact('favorito'));
        
    } else {
        $universidade = Universidade::all();    
        return view('universidades',compact('user'))->with(compact('universidade'));
    }
    }
}
