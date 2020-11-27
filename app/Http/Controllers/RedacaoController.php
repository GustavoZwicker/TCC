<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RedacaoController extends Controller
{
    public function index()
    {
        $user = Auth::User();
        return view('redacoes',compact('user'));
    }
}
