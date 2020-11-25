<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universidade;
use Illuminate\Support\Facades\Auth;

class UniversidadeController extends Controller
{
    public function index()
    {
        $universidade = Universidade::all();
        $user = Auth::User();
        return view('universidades',compact('user'))->with(compact('universidade'));
    }

    protected function create(Request $data)
        {
            Universidade::create([
                'name' => $data['name'],
                'initials' => $data['initials'],
                'site' => $data['site'],
                'local' => $data['local'],
                'logo' => $data['logo'],
                'edict' => $data['edict'],
            ]);
            return redirect()->intended('home');
        }
}

