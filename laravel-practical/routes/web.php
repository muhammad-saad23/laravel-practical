<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
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

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', function () {
    return view('register');
});

Route::get('/register',[studentcontroller::class,'register']);
Route::post('/register',[studentcontroller::class,'create']);
Route::post('/register',[studentcontroller::class,'insert']);
Route::get('/view',[studentcontroller::class,'select']);
Route::get('/view/dlt{id}',[studentcontroller::class,'delete'])->name('std_del');





