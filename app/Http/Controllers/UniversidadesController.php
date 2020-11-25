<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universidade;
use Illuminate\Support\Facades\Auth;

class UniversidadesController extends Controller
{
    public function index()
    {
        $universidade = Universidade::all();
        $user = Auth::User();
        return view('universidades',compact('user'))->with(compact('universidade'));
    }
}
