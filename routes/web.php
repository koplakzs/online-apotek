<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ServiceController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get("/", "index")->name("home");
    Route::get("/product", "product");
    Route::get("/contact", "contact");
    Route::get("/about", "about");
    Route::get("/service", "service");
});

Route::controller(AuthController::class)->group(function () {
    Route::get("/admin-login", "login");
    Route::post("/admin-login", "authenticate");
    Route::get("/logout", "logout");
});

Route::middleware(["auth"])->group(function () {
    Route::prefix("administrator")->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get("/", "index");
            Route::get("/profile", "profile");
            Route::get("/setting", "setting");
            Route::post("/reset-account", "resetAccount");
        });
        Route::resource("/product", ProdukController::class);
        Route::resource("/service", ServiceController::class);
        Route::resource("/category", KategoriController::class);
    });
});
