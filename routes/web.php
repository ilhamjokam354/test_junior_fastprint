<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
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

Route::get("/", [HomeController::class, "index"]);

Route::get("login", [AuthController::class, "index"]);
Route::get("logout", [AuthController::class, "logout"])->name("auth.logout");
Route::post("login", [AuthController::class, "login"])->name("auth.login");
Route::group(["middleware" => "auth"], function(){
    Route::resource("admin/produk", ProdukController::class);
});