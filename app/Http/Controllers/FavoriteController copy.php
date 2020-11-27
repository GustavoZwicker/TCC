<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorito;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favorite(Request $data)
    {   
        $favorito = Favorito::all();
        switch ($favorito){
            case NULL:
                Favorito::create([
                    'universidade_id' => $data['universidade_id'],
                    'user_id' => $data['user_id'],
                ]);
                break;
            default:
                var_dump($favorito->universidade_id);
            
        }
    }
}