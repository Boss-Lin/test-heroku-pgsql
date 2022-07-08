<?php

use App\Http\Controllers\dbController;
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
    return view('welcome');
});

Route::get('/test', [dbController::class, 'test']);

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/testlayout', function () {
    return view('testlayout', ['name' => 'Laravel 6.0 範例']);
});
