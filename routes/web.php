<?php


use App\Http\Controllers\admins\DonHangController;
use App\Http\Controllers\admins\PtttController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\DanhMucController;
use App\Http\Controllers\admins\SanPhamController;

use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\admins\TaiKhoanController;

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

Route::resource('danhmucs', DanhMucController::class);

Route::prefix("admin")->name("admin.")->group(function(){
    Route::resource("sanpham",SanPhamController::class);
});

Route::prefix('/')->name("client.")->group(function(){
   Route::get("/trang-chu",[HomeController::class,"index"]);
});


