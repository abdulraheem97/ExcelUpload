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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', [App\Http\Controllers\FileUplaodController::class, 'index']);
Route::get('/fileUpload', [App\Http\Controllers\FileUplaodController::class, 'fileUpload']);
Route::get('/viewFile/{id}', [App\Http\Controllers\FileUplaodController::class, 'viewFile']);
Route::post('/fileUpload', [App\Http\Controllers\FileUplaodController::class, 'fileUploadData']);

