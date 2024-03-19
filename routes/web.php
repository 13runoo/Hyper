<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/Home",[UserController::class,'index'])->name('user.index');
Route::get("/user/create", [UserController::class,'create'])->name('User.create');
Route::get("/board", [PagesController::class,'index'])->name('board');
Route::get("/login", [PagesController::class,'login'])->name('login');
Route::get("/edit", [PagesController::class,'edit'])->name('edit');
Route::get("/register", [PagesController::class,'register'])->name('register');
