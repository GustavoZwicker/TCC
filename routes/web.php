<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/{id}', [HomeController::class, 'show']);

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
Route::get('/cadastro',function(){
    return view('cadastro');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/ex',function(){
    return view('ex');
});
