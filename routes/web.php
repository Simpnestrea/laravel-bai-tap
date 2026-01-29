<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // <--- 1. QUAN TRỌNG: Dòng này phải ở đây

// 1. Trang chủ
Route::get('/', function () {
    return view('home');
})->name('home');

// GOM NHÓM ROUTE PRODUCT
Route::prefix('product')->group(function () {
    // 2. Danh sách sản phẩm
    Route::get('/', function () {
        $products = [
            ['id' => 1, 'name' => 'iPhone 15'],
            ['id' => 2, 'name' => 'Samsung S24']
        ];
        return view('product.index', compact('products'));
    })->name('product.index');

    // 3. Form thêm mới
    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    // 4. Chi tiết sản phẩm (mặc định id = 123)
    Route::get('/{id?}', function ($id = '123') {
        return "Sản phẩm ID: " . $id;
    })->name('product.detail');
});

// 5. Thông tin sinh viên (Đã cập nhật tên Nguyễn Gia Kiệt)
Route::get('/sinhvien/{name?}/{mssv?}', function ($name = 'Nguyen Gia Kiet', $mssv = '4003367') {
    return "Sinh viên: $name - MSSV: $mssv";
});

// 6. Bàn cờ vua
Route::get('/banco/{n}', function ($n) {
    return view('banco', compact('n'));
});

// --- COMMIT 1: Đăng ký (Code mới thêm vào) ---
Route::get('/signin', [AuthController::class, 'showSignIn'])->name('auth.signin');
Route::post('/signin', [AuthController::class, 'checkSignIn'])->name('auth.check');