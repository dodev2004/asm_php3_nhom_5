<?php


use App\Http\Controllers\admins\DonHangController;
use App\Http\Controllers\admins\PtttController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\DanhMucController;
use App\Http\Controllers\admins\SanPhamController;
use App\Http\Controllers\admins\ChucVuController;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\admins\TaiKhoanController;

use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;


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
})->name('home');
Route::middleware(['auth',CheckRoleAdminMiddleware::class])->prefix("admin")->name("admin.")->group(function () {
    Route::resource("sanpham", SanPhamController::class);
    Route::resource("taikhoan", taikhoanController::class);
    Route::resource('pttt', PtttController::class);
    Route::resource('donhang', DonHangController::class);
    Route::resource("chucvus", ChucvuController::class); 
    Route::resource('danhmucs', DanhMucController::class);
});
Route::get('login', [AuthController::class, 'showFormLogin']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'showFormRegister']);
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
//admin

Route::prefix('/')->name("client.")->group(function(){
   Route::get("/trang-chu",[HomeController::class,"index"]);
});



