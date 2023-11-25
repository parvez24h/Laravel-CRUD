<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/{id}/view', [ItemController::class, 'view']);
Route::get('/{id}/update', [ItemController::class, 'update']);
Route::put('/{id}/update', [ItemController::class, 'update_data']);
Route::get('/{id}/delete', [ItemController::class, 'delete']);
Route::delete('/{id}/delete', [ItemController::class, 'delete_data']);
Route::get('/', [ItemController::class, 'index']);
Route::get('/create', [ItemController::class, 'create']);
Route::post('/store', [ItemController::class,'store']);