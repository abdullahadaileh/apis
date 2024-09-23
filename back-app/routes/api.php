<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::middleware('api')->group(function () {
    Route::get('/products', [ProductController::class, 'index']);  // لجلب جميع المنتجات
    Route::post('/products', [ProductController::class, 'store']); // لإضافة منتج جديد
    Route::get('/products/{id}', [ProductController::class, 'show']); // لجلب منتج محدد
    Route::put('/products/{id}', [ProductController::class, 'update']); // لتحديث منتج
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // لحذف منتج
});
