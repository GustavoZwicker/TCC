<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserUniversidade as Favorite;

class UserAuth extends Controller
{
    protected $cid;
    public function like(){
        $this->cid = auth() ->guard('customer')->user()->id;

        if (!Favorite::where(['universidade_id'=>$universidade_id,'user_id'=>$cid])->exists()){
            Favorite::create(['universidade_id'=>$universidade_id,'user_id'=>$cid]);

        }

        return redirect()->intended('home');
    }
}