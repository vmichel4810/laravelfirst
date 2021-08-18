<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\BookController;
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

Route::get('/', [NavController::class, 'home']);

Route::get('/addbook', [NavController::class, 'addbook']);
Route::post('/addBook', [BookController::class, 'store']);

Route::get('/readbook', [NavController::class, 'readBook']);

Route::get('/onebook/{id}', [NavController::class, 'oneBook']);

Route::get('/updatebook', [Navcontroller::class, 'updatebook']);
Route::post('/updatebook', [BookController::class, 'updatebook']);

Route::post('/deleteBook', [BookController::class, 'delete']);


Route::get('/contact', [NavController::class, 'contact']);




