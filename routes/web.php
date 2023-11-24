<?php

use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\login\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('',[PostController::class,'index'])->name("index");
Route::get('cartpage',[PostController::class,'cartpage'])->name("cartpage");

Route::get('regisetrpage',[PostController::class,'regisetrpage'])->name("regisetrpage");
 Route::post('login',[LoginController::class,'login'])->name("login");
 Route::get('logout',[LoginController::class,'logout'])->name("logout");


