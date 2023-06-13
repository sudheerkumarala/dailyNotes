<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', [NoteController::class,'index'])->name('notes');
//Route::post('/submitNotes', [NoteController::class,'store'])->name('notes_submit');
//Route::get('/notes/{note}', [NoteController::class,'show'])->name('notes_show');
//
//Route::get('/', [LoginController::class,'index']);
//Route::match(['get','post'],'/login',[LoginController::class,'index'])->middleware('guest')->name('login');

Route::resource('/notes', NoteController::class);

Route::get('/login', [LoginController::class,'index'])->name('login');

