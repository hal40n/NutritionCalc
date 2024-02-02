<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalculationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('/foods', FoodController::class);
Route::match(['get', 'post'], '/foods/selectFood', [FoodController::class, 'searchFoods'])->name('selectFoods');
Route::resource('/order', OrderController::class);
Route::resource('/user', UserController::class);
Route::get('/calculate', [CalculationController::class, 'calc'])->name('calc');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
