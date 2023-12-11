<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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


Route::get("/", [HomeController::class,"app"]);
// Route::get("/about", [HomeController::class,"about"]);
Route::get("/about", [HomeController::class,"about"]);
Route::get("/products", [HomeController::class,"products"]);
Route::get("/store", [HomeController::class,"store"]);
// Route::get("/mahasiswa", [HomeController::class,"mahasiswa"]);
// Route::get("/profil", [HomeController::class,"profil"]);
// Route::get("/services", [HomeController::class,"services"]);

//auth
Route::get("/login", [AuthController::class,"login"])->name('login');
Route::post("/login", [AuthController::class,"authenticated"]);
Route::get("/logout", [AuthController::class,"logout"]);


//dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
