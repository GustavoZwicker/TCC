<?php

namespace App\Http\Controllers;
use App\Models\Universidade;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
    }

    public function create(){
        return view('home');
    }

    public function show($id){
        $univ = Universidade::where('id', $id)->first();
        dd($univ);
    }
}
