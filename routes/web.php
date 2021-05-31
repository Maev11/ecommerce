<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriaController;

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


Route::get('/', 'App\Http\Controllers\appController@index')->name('/');

Route::get('about',function () {
    return view('about');
})->name('about');

Route::get('home','App\Http\Controllers\appController@index')->name('home');

//rutas para el inicio de sessión
Route::get('login', 'App\Http\Controllers\loginController@index')->name('login');
Route::post('ingresar','App\Http\Controllers\loginController@login');
Route::post('logout','App\Http\Controllers\loginController@logout')->name('logout');

//rutas para el registro de un nuevo usuario desde la landpage
Route::get('register','App\Http\Controllers\registerController@indexFormUser')->name('register');
Route::post('newRegister','App\Http\Controllers\registerController@registerUser')->name('newRegister');
Route::post('validarUsuario','App\Http\Controllers\registerController@ExistenciaEmail')->name('validarUsuario');

//rutas para categorias
Route::resource('categoria', categoriaController::class)->only(['index', 'show','store','edit']);

//rutas axios de usuario en configuraciones

Route::get('configUser','App\Http\Controllers\appController@getConfig')->name('configUser');

Route::get('Buscar/inicio','App\Http\Controllers\appController@Buscar')->name('Buscar/inicio');

//rutas para productos


//rutas para preguntas


//rutas para preguntas

Route::get('registro', function (){
    return view('login.register');
});

Route::get('app',function(){
    return view('layouts.app');
});

Route::get('cuenta/Supervisor', function(){
    return view('dashboard');
})->middleware('auth')->name('cuenta/Supervisor');

Route::get('cuenta/Encargado', function(){
    return 'bienvenido encargado';
})->middleware('auth')->name('cuenta/Encargado');


Route::get('cuenta/Vendedor', function(){
    return 'bienvenido vendedor';
})->middleware('auth')->name('cuenta/Vendedor');

Route::get('categorias',function(){
    return view('categorias.showCategorias');
});

//