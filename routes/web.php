<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admins\SanPhamController;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\admins\TaiKhoanController;
use App\Http\Controllers\clients\SanPhamController as ClientSanPham;
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
Route::prefix("admin")->name("admin.")->group(function(){
    Route::resource("sanpham",SanPhamController::class);
    Route::resource("taikhoan",taikhoanController::class);
});
Route::prefix('/')->name("client.")->group(function(){
   Route::get("/trang-chu",[HomeController::class,"index"]);
   Route::get("/san-pham-chi-tiet/{id}",[ClientSanPham::class,"sanphamchitiet"])->name("sanphamchitiet");   
});
Route::post("/client/login",[HomeController::class,"login"])->name("client.login");
Route::post("/client/register",[HomeController::class,"register"])->name("client.register");

