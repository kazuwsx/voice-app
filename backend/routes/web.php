<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\User\UserIndexController;
use App\Http\Controllers\Voice\VoiceSaveController;
use App\Http\Controllers\Voice\VoiceCreateController;
use App\Http\Controllers\Voice\VoiceDetailsController;

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
Route::get('/', TopController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/users',UserIndexController::class);
Route::get('/voice/create', VoiceCreateController::class);
Route::get('/voice/{id}', VoiceDetailsController::class);
Route::post('/voice/save', VoiceSaveController::class);

Auth::routes();
