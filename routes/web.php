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
    return redirect('/homepage/boxes');
});

Route::get('/homepage/boxes', [\App\Http\Controllers\DefaultController::class, 'index'])
    ->name('default');

Route::get('/homepage/box/{id}', [\App\Http\Controllers\DefaultController::class, 'show'])
    ->name('homepage.box');

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
Route::post('/box/select-items', [\App\Http\Controllers\BoxController::class, 'selectBoxItems'])
    ->name('box.select.items');
//Items
Route::get('/items', [\App\Http\Controllers\ItemController::class, 'index'])
    ->name('items');;
Route::post('/item/add', [\App\Http\Controllers\ItemController::class, 'store'])
    ->name('item.add');;

//Badges
Route::get('/badges', [\App\Http\Controllers\BadgeController::class, 'index'])
    ->name('badges');;
Route::post('/badge/add', [\App\Http\Controllers\BadgeController::class, 'store'])
    ->name('badge.add');

//Deliveries
Route::get('/delivery/box/{id}', [\App\Http\Controllers\DeliveryController::class, 'show'])
    ->name('delivery.box.get');;
Route::post('/delivery/box/{id}', [\App\Http\Controllers\DeliveryController::class, 'store'])
    ->name('delivery.box.post');

//Affiliates
Route::get('/affiliates', function () {
    return view('affiliates');
})->name('affiliates');;

//how works
Route::get('/how-to-play', function () {
    return view('how-to-play');
})->name('how.to.play');;

require __DIR__ . '/auth.php';
