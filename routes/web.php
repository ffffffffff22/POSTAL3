<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FindNumber;

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
    return view('inicio');
});

Route::get('/ajax/{value}', [FindNumber::class, 'FindNumberFunction']);

Route::get('/laravel', function () {
    return view('welcome');
});

