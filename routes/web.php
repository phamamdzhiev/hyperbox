<?php

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

Route::get('/', function () {
    return view('layouts.welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
//Categories
Route::get('/box/categories', [\App\Http\Controllers\CategoryController::class, 'index'])
    ->name('box.categories');;
Route::post('/boxes/category/add', [\App\Http\Controllers\CategoryController::class, 'store'])
    ->name('box.category.add');;
//Boxes
Route::get('/boxes', [\App\Http\Controllers\BoxController::class, 'index'])
    ->name('boxes');
Route::get('/boxes/show/{id}', [\App\Http\Controllers\BoxController::class, 'show'])
    ->name('box.show.single');
Route::post('/boxes/add', [\App\Http\Controllers\BoxController::class, 'store'])
    ->name('box.add');
//Items
Route::get('/items', [\App\Http\Controllers\ItemController::class, 'index'])
    ->name('items');;
Route::post('/item/add', [\App\Http\Controllers\ItemController::class, 'store'])
    ->name('item.add');;
//Price lists
Route::get('/price-list', [\App\Http\Controllers\PriceListController::class, 'index'])
    ->name('price.list');;
Route::post('/price-list-add', [\App\Http\Controllers\PriceListController::class, 'store'])
    ->name('price.list.add');
//Badges
Route::get('/badges', [\App\Http\Controllers\BadgeController::class, 'index'])
    ->name('badges');;
Route::post('/badge/add', [\App\Http\Controllers\BadgeController::class, 'store'])
    ->name('badge.add');

require __DIR__ . '/auth.php';
