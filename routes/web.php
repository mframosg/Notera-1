<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriasController;
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

Route::view('/','index')->name('index');
//Route::view('/about','about')->name('about');
Route::view('/past','past')->name('past')->middleware('auth');
Route::view('/login','login')->name('login');
Route::view('/layouts/app','app')->name('app');
Route::view('/notas','notas')->name('notas')->middleware('auth');

Route::view('/faltante','faltante')->name('faltante');

// Route::view('/materia','materia')->name('materia');
Route::get('/materia', [MateriasController::class,'index'])->name('materia.index')->middleware('auth');
Route::get('/materia/crear', [MateriasController::class,'create'])->name('materias.crear')->middleware('auth');
Route::post('/materia', [MateriasController::class,'store'])->name('materia.store')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
