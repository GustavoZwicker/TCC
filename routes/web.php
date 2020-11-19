<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::view('cadastro','cadastro');
Route::post('cadastro',[RegisterController::class,'create']);

Route::get('/',function(){
    return view('home');
});

Route::get('/welcome',function(){
    return view('welcome');
});

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

Route::get('/login',function(){
    return view('login');
});

Route::get('/ex',function(){
    return view('ex');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
