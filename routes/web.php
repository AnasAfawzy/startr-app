<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/anas', [TestController::class, 'anas']);
// Route::get('/print_name/{name?}', [TestController::class, 'print_name'])->name('name');
// Route::view('/anas', 'welcome');
// Route::redirect('/heare', 'https://www.google.com/');
Route::controller(TestController::class)->name('test.')->group(function () {
    Route::get('/anas', 'anas')->middleware('check_user');
    Route::get('/print_name/{name?}', 'print_name')->name('name');
});
Route::resource('items', ItemController::class)->only('index');
