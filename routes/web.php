<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UniversidadeController;
use App\Http\Controllers\UniversidadesController;
use App\Http\Controllers\RedacoesController;
use App\Http\Controllers\QSomosController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Prova;

use App\Models\Universidade;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('login','login');
Route::post('user',[LoginController::class,'login']);

Route::post('/cadastro',[RegisterController::class,'create']);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::view('/',[HomeController::class,'index']);

Route::post('/', '\App\Http\Controllers\Auth\HomeController@index');

Route::view('/home',[HomeController::class,'index']);

Route::post('/', '\App\Http\Controllers\Auth\HomeController@index');

Route::view('adduni','admin.adduniversidade');
Route::post('adduni',[UniversidadeController::class,'create']);

Route::get('/provaegabarito/{name}',function($name){
    $universidade = Universidade::find($name);
    $user = Auth::User();
    $p_data = Prova::where('universidades_id',$name)->orderBy('year','DESC')->get();
        return view('provaegabarito',compact('user'))->with(compact('universidade'))->with(compact('p_data'));
});

Route::post ( '/search',[UniversidadesController::class,'search']);

Route::get('/redacao_fuv',function(){
    $user = Auth::User();
        return view('redacao_fuv',compact('user'));
});

Route::get('/redacao_puc',function(){
    $user = Auth::User();
        return view('redacao_puc',compact('user'));
});

Route::get('/redacao_unicamp',function(){
    $user = Auth::User();
        return view('redacao_unicamp',compact('user'));
});

Route::get('/redacao_enem',function(){
    $user = Auth::User();
        return view('redacao_enem',compact('user'));
});
Route::post('favoritado',[FavoriteController::class,'favorite']);
Route::post('desfavoritado',[FavoriteController::class,'destroy']);

Route::get('/universidades',[UniversidadesController::class,'index']);

Route::get('/redacoes',[RedacoesController::class,'index']);

Route::get('/quemsomos',[QSomosController::class,'index']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/teste',[HomeController::class,'index']);