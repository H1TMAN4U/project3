<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\IngredientController;
// use App\Models\Ingredients;

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
Route::get('/search','RecipeController@search');
Route::get('list',[RecipeController::class,'show']);
// Route::get('list',[IngredientController::class,'show']);

Route::get('/', function () {
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/homepage', function () {
    return view('homepage');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home',[DataController::class,"index"]);
});