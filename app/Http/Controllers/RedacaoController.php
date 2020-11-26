<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedacaoController extends Controller
{
    public function index()
    {
        $user = Auth::User();
        return view('redacoes',compact('user'));
    }
}
