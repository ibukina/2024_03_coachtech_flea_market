<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\AdminController;

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
Route::get('/item/{item_id}', [ItemController::class, 'detail'])->name('detailView');
Route::post('/item/search', [ItemController::class, 'search']);
Route::get('/register', [RegisteredUserController::class, 'index']);
Route::post('/register', [RegisteredUserController::class, 'create']);
Route::get('/login', [AuthenticatedSessionController::class, 'index'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'create']);

Route::group(['middleware'=>['auth']], function (){
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
    Route::get('/item/comment/{item_id}', [CommentController::class, 'index'])->name('commentView');
});

Route::group(['middleware'=>['auth', 'user-only']], function(){
    Route::post('/item/comment/{item_id}', [CommentController::class, 'create']);
    Route::post('/item/comment/delete/{comment_id}/{item_id}', [CommentController::class, 'destroy']);
    Route::post('/item/like/{item_id}', [LikeController::class, 'create']);
    Route::post('/item/unlike/{item_id}', [LikeController::class, 'destroy']);
    Route::get('/purchase/{item_id}', [PurchaseController::class, 'index'])->name('purchaseView');
    Route::post('/purchase/{item_id}', [PurchaseController::class, 'purchase']);
    Route::get('/purchase/address/{item_id}', [PurchaseController::class, 'address']);
    Route::post('/purchase/address/{item_id}', [PurchaseController::class, 'updateAddress']);
    Route::get('/sell', [ItemController::class, 'sellView']);
    Route::post('/sell', [ItemController::class, 'sellCreate']);
    Route::get('/mypage', [UserController::class, 'mypage']);
    Route::get('/mypage/profile', [UserController::class, 'profile']);
    Route::post('/mypage/profile', [UserController::class, 'updateProfile']);
});

Route::group(['middleware'=>['auth', 'can:merchant-only']], function(){
    Route::get('/merchant', [MerchantController::class, 'index']);
    Route::post('/merchant/invitation', [MerchantController::class, 'create']);
    Route::post('/merchant/delete/{staff_id}', [MerchantController::class, 'destroy']);
});

Route::group(['middleware'=>['auth', 'can:admin-only']], function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/admin/delete/{user_id}', [AdminController::class, 'destroy']);
});