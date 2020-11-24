<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UniversidadeController;

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

Route::view('cadastro','Auth.register');
Route::post('cadastro',[RegisterController::class,'create']);

Route::view('/home',[HomeController::class,'index']);
Route::view('/','home');
Route::post('/', '\App\Http\Controllers\Auth\HomeController@index');

Route::view('adduni','admin.adduniversidade');
Route::post('adduni',[UniversidadeController::class,'create']);


Route::get('/provaegabarito',function(){
    return view('provaegabarito');
});

Route::get('/redacao',function(){
    return view('redacao');
});

Route::get('/universidades',function(){
    return view('universidades');
});

Route::get('/redacoes',function(){
    return view('redacoes');
});

Route::get('/debug',function(){
    
    return var_dump($debug);
});

Route::get('/quemsomos',function(){
    return view('quemsomos');
});

Route::get('/ex',function(){
    return view('ex');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');