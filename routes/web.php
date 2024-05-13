<?php

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


Route::get('/anas', [TestController::class, 'anas']);
Route::get('/print_name/{name?}', [TestController::class, 'print_name'])->name('name');
// Route::view('/anas', 'welcome');
// Route::redirect('/heare', 'https://www.google.com/');
