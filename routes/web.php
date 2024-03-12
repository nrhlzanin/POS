<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\ProductsController;
use App\HTTP\Controllers\SalesController;
use App\HTTP\Controllers\UserController;
use App\HTTP\Controllers\LevelController;
use App\HTTP\Controllers\KategoriController;

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
<<<<<<< Updated upstream
=======

//Route for HomeController
// Route::get('/', [HomeController::class, 'index']);

//Routes for ProductsController
Route::prefix('category')->group(function(){
    Route::get('/food-beverage', [ProductsController::class, 'foodbeverage']);
    Route::get('/beauty-health', [ProductsController::class, 'beautyhealth']);
    Route::get('/home-care', [ProductsController::class, 'homecare']);
    Route::get('/baby-kid', [ProductsController::class, 'babykid']);
});     

//Route for UserController
Route::get('/user', [UserController::class, 'index']);

//Route for SalesController
Route::get('/transaction', [SalesController::class, 'transaction']);

>>>>>>> Stashed changes
Route::get('/', function() {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
