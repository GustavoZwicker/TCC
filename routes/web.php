<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UniversidadeController;
use App\Http\Controllers\UniversidadesController;
use App\Http\Controllers\RedacoesController;
use App\Http\Controllers\QSomosController;
use App\Http\Controllers\UserAuth;

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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::view('/',[HomeController::class,'index']);

Route::post('/', '\App\Http\Controllers\Auth\HomeController@index');

Route::view('/home',[HomeController::class,'index']);

Route::post('/', '\App\Http\Controllers\Auth\HomeController@index');

Route::view('adduni','admin.adduniversidade');
Route::post('adduni',[UniversidadeController::class,'create']);

Route::get('/provaegabarito',function(){
    $user = Auth::User();
    return view('provaegabarito',compact('user'));
});

Route::get('/provaegabarito/{name}',function($name){
    $universidade = Universidade::find($name);
        $user = Auth::User();
        return view('provaegabarito',compact('user'))->with(compact('universidade'));
});

Route::get('/redacao',function(){
    $user = Auth::User();
        return view('redacao',compact('user'));
});



Route::get('/universidades',[UniversidadesController::class,'index']);

Route::get('/redacoes',[RedacoesController::class,'index']);

Route::get('/quemsomos',[QSomosController::class,'index']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');