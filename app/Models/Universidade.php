<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidade extends Model
{
    use HasFactory;
    protected $fillable = [
        'initials',
        'name',
        'site',
        'local',
        'logo',
        'edict',
    ];
    
    public function favorite(){

        $cid = auth()->guard('User')->user()!=null ? auth()->guard('User')->user()->id : null;
        return $this->belongTo(UserUniversidade::class,'id','universidade_id')->where('user_id',$cid);
    }

    public function like(){
        return $this->favorite()->selectRaw('universidade_id,count(*) as count')->groupBy('universidade_id');
    }
}
