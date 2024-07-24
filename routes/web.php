<?php

use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\admins\DonHangController;
use App\Http\Controllers\admins\PtttController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admins\SanPhamController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('/danhsach',SanPhamController::class);
// Route::resource('/danhmuc',DanhMucController::class);
// Route::resource('/taikhoan',TaiKhoanController::class);
Route::resource('/pttt',PtttController::class);
Route::resource('/donhang',DonHangController::class);


