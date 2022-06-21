<?php

use App\Http\Controllers\RecipeController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [RecipeController::class, "index"])->name("recipe.index");;

Route::post('/recipe', [RecipeController::class, "store"])->name("recipe.store");