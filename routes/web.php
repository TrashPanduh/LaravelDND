<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\CharacterItemsController;

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

Route::get('/', function () {
    return view('welcome');
});

// RESTFUL routes
// GET index (all of the things)
// GET show (one of the things)
// GET create (the form to make a new thing)
// POST store (save the thing from the create form)
// GET edit (the form to change an existing thing)
// PUT/PATCH update (save the thing from the edit form)
// DELETE delete (remove the thing)


Route::prefix('characters')->name('characters.')->group(function () {
    Route::get('new', [CharactersController::class, 'create'])->name('create');
    Route::post('/', [CharactersController::class, 'store'])->name('store');

    Route::prefix('{character}/items')->name('items.')->group(function () {
        Route::get('new', [CharacterItemsController::class, 'create'])->name('create');
        Route::post('/', [CharacterItemsController::class, 'store'])->name('store');
    });
});


Route::prefix('items')->name('items.')->group(function () {
    Route::post('/', [ItemsController::class, 'store'])->name('store');
});


Route::get('/characters/{character}', [CharactersController::class, 'show'])->name('characters.show');
Route::get('characters/add', [RaceController::class, 'create']);



