<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QSomosController extends Controller
{
    public function index()
    {
        $user = Auth::User();
        return view('quemsomos',compact('user'));
    }
}
