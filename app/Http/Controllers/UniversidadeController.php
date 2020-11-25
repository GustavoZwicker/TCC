<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universidade;

class UniversidadeController extends Controller
{
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

