<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAuth extends Controller
{
    function registro(Request $req){
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->data_de_nasc=$req->data_de_nasc;
        $user->genero=$req->genero;
        $user->save();
        return redirect('home');
    }
}
