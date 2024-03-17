<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ItemController;

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

Route::get('/', [ItemController::class, 'index']);
Route::get('/item/item_id', [ItemController::class, 'detail']);
Route::get('/register', [RegisteredUserController::class, 'index']);
Route::post('/register', [RegisteredUserController::class, 'create']);
Route::get('/login', [AuthenticatedSessionController::class, 'index'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'create']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
