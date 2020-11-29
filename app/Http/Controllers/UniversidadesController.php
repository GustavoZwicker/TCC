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

    public function search() {
        $universidade = Universidade::where('name','LIKE','%'.$_POST['data'].'%')->orWhere('initials','LIKE','%'.$_POST['data'].'%')->orWhere('local','LIKE','%'.$_POST['data'].'%')->get();
        $user = Auth::User();
        $id = Auth::id();
        if (count ( $universidade ) > 0){
        
        $fav = Favorito::where('user_id',$id)->get()->toArray();
        $favorito['user_id'] = array_column($fav, 'user_id');
        $favorito['universidade_id'] = array_column($fav, 'universidade_id');
        return view('universidades',compact('user'))->with(compact('universidade'))->with(compact('favorito'));
    }else{
        $error = 'Nada foi encontrado...';
        return view('universidades',compact('user'))->with(compact('universidade'))->with(compact('error'));
    }
}
}
