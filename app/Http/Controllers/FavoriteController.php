<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorito;

class FavoriteController extends Controller
{
    public function favorite(Request $data)
    {   
                Favorito::create([
                    'universidade_id' => $data['universidade_id'],
                    'user_id' => $data['user_id'],
                ]);
                return redirect()->intended('universidades');
                }

    public function destroy(Request $data)
    {   
                Favorito::where('user_id',$data['user_id'])->where('universidade_id',$data['universidade_id'])->delete();
                return redirect()->intended('universidades');
            }

        }