<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\Tin2Controller;
use App\Http\Controllers\QtTinController;
use App\Http\Controllers\AboutMeController;

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
// setup từ lab6
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// rou lấy tin
Route::get('/ct/{id}', [TinController::class, 'lay1tin'])->name('laytin');

// rou trang chủ
Route::get('/', [TinController::class, 'index'])->name('trangchu');
Route::get('/tin/{id}', [TinController::class, 'chitiet']);

// rou thông tin sv
Route::get('/thongtinsv', [AboutMeController::class, 'aboutme'])->name('thongtinsv');

// rou tin xem nhieu
Route::get('/txn', function(){
    $query = DB::table('tin')
    ->select('id', 'tieuDe', 'xem')
    ->orderBy('xem', 'desc')
    ->limit(10);
    $data = $query->get();
    return view('tinxemnhieu', compact('data'));
})->name('tinxemnhieu');

// rou tin mới
Route::get('/tinmoi', function(){
    $query = DB::table('tin')
    ->select('id', 'tieuDe', 'ngayDang')
    ->orderBy('ngayDang', 'desc')
    ->limit(10);
    $data = $query->get();
    return view('tinmoi', compact('data'));
})->name('tinmoi');

// rou tin trong loại
Route::get('/tintrongloai/{id}', function($id){
    $query = DB::table('tin')
    ->select('id', 'tieuDe', 'tomTat')
    ->where('idLT', '=', $id)
    ->orderBy('ngayDang', 'desc');
    $data = $query->get();
    $tieuDeLoai = DB::table('loaitin')
    ->select('ten')
    ->where('id', '=', $id)->first()->ten;
    return view('tintrongloai', ['data'=>$data,'tieudeloai'=>$tieuDeLoai]);
})->name('tintrongloai');

// rou chi tiet tin
Route::get('/tin/{id}', function($id){
    $tin = DB::table('tin')
    ->where('id', $id)
    ->first();
    return view('chitiettin', ['tin'=>$tin]);
})->name('chitiettin');

// rou danh sách tin
Route::get('/danhsachtin', [Tin2Controller::class, 'index2'])->name('danhsachtin');

// rou thêm tin
Route::get('/themtin', [Tin2Controller::class, 'them'])->name('themtin');
Route::post('themtin_', [Tin2Controller::class, 'them_'])->name('themtin_');

// rou xóa tin
Route::get('/xoatin/{id}', [Tin2Controller::class, 'xoa'])->name('xoatin');

// rou cập nhật tin
Route::get('/capnhattin/{id}', [Tin2Controller::class, 'capnhat'])->name('capnhattin');
Route::post('/capnhattin/{id}', [Tin2Controller::class, 'capnhat_'])->name('capnhattin_');


// Phân quyền đăng nhập
// Hạn chế truy cập rou bằn cách bắt buộc đn
// Đối với đn quản trị sẽ dưa theo idgroup = 1
Route::get('download', function(){
    return view("download");
})->middleware('auth');

// rou quản trị tin
Route::get('/quantritin', [QtTinController::class, 'index'])->name('quantritin');

// bảo vệ 1 route với middleware đã tạo
Route::get('/quantri', function(){
    return view("quantri");
})->middleware('auth', 'Quantri');

// rou hạn chế truy cập bằng http basic
Route::get('/dl', function(){
    return view("download");
})->middleware('auth.basic');

