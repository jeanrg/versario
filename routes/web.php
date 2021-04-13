<?php

use App\Http\Controllers\BuscarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VersiculosController;
use App\Http\Controllers\DatatableController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('versiculos.index'); });

Auth::routes(['verify'=>false]);

Route::resource('versiculos', VersiculosController::class);
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('buscar', [BuscarController::class, 'index'])->name('buscar');
Route::get('datatables/versiculos', [DatatableController::class, 'versiculo' ])->name('datatables.versiculo');

