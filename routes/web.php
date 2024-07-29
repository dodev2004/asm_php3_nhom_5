<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admins\SanPhamController;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\admins\TaiKhoanController;
use App\Http\Controllers\clients\SanPhamController as ClientSanPham;
use App\Http\Controllers\clients\GioHangController;

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
   Route::get("/trang-chu",[HomeController::class,"index"])->name("index");
   Route::get("/san-pham-chi-tiet/{id}",[ClientSanPham::class,"sanphamchitiet"])->name("sanphamchitiet");   
   Route::get("/client/logout",[HomeController::class,"logout"])->name("logout");
   Route::get("/client/cart",[GioHangController::class,"index"])->name("cart");
   Route::post("/client/cart-vocher",[GioHangController::class,"index"])->name("cartvocher");       
   Route::get("/client/cart/checkout",[GioHangController::class,"checkout"])->name("cartcheckout");
});
Route::post("/client/login",[HomeController::class,"login"])->name("client.login");
Route::post("/client/register",[HomeController::class,"register"])->name("client.register");
Route::post('/client/addCat',[ClientSanPham::class,"themSpGioHang"])->name("client.addCat");    
Route::delete("/client/cart/delete/{id}",[ClientSanPham::class,"deleteGioHang"])->name("client.deletecart");
Route::put("/client/cart/update/{id}",[GioHangController::class,"updateGioHang"])->name("client.updatecart");
    