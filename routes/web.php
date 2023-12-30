<?php

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
use App\Http\Controllers\ApiController;
Route::get('/', [ApiController::class, 'index']);
Route::get('/home', [ApiController::class, 'home']);
Route::get('/gettokohp', [ApiController::class, 'apigetTokohp']);
Route::post('/login', [ApiController::class, 'apiLogin']);
Route::get('/logout', [ApiController::class, 'apiLogout']);