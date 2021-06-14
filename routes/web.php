<?php

use App\Http\Controllers\SerieController;
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

Route::get('/',[SerieController::class, 'index'])->name('index');

Route::get('/seeMore/{id}',[SerieController::class, 'show'])->name('seeMore');

Route::get('/create',[SerieController::class, 'create'])->name('create');

Route::post('/',[SerieController::class, 'store'])->name('store');