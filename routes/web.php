<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('home');
});

route::get('/', [PagesController::class, 'home'])->name('home');
route::get('/galerie', [PagesController::class, 'galerie'])->name('home-galerie');
route::get('/cenik', [PagesController::class, 'cenik'])->name('home-cenik');
route::get('/kontakt', [PagesController::class, 'kontakt'])->name('home-kontakt');
