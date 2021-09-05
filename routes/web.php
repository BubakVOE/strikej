<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\ReservatorController;

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




// admin

route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
route::put('/dashboard/reserve/update/{id}', [ReserveController::class, 'update']);
route::delete('/dashboard/reserve/delete/{id}', [ReserveController::class, 'delete'])->name('dashboard-delete');


route::get('/dashboard/post/create', [PostController::class, 'create'])->name('galerie.create');
route::post('/dashboard/post/store', [PostController::class, 'store'])->name('galerie.store');
route::get('/dashboard/post/edit/{id}', [PostController::class, 'edit']);
route::put('/dashboard/post/update/{id}', [PostController::class, 'update']);
Route::delete('/dashboard/post/delete/{id}',[PostController::class,'destroy']);
Route::delete('/dashboard/post/deleteimage/{id}',[PostController::class,'deleteimage']);
Route::delete('/dashboard/post/deleteThumbnail/{id}',[PostController::class,'deletecover']);


// public
route::get('/', [PagesController::class, 'home'])->name('home');
route::get('/galerie', [PagesController::class, 'galerie'])->name('home-galerie');
route::get('/cenik', [PagesController::class, 'cenik'])->name('home-cenik');
route::get('/kontakt', [PagesController::class, 'kontakt'])->name('home-kontakt');


route::post('/reserve', [ReservatorController::class, 'store'])->name('reservation');

route::get('/post/show/{id}', [PosterController::class, 'show']);