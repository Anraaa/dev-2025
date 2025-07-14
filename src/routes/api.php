<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;

// tests
Route::prefix('tests')->middleware('apikey')->group(function () {
    Route::get('/', [TestController::class, 'index']);     // GET /api/tests
    Route::get('{id}', [TestController::class, 'show']);   // GET /api/tests/{id}
    Route::post('/', [TestController::class, 'store']);    // POST /api/tests
    Route::put('{id}', [TestController::class, 'update']); // PUT /api/tests/{id}
    Route::delete('{id}', [TestController::class, 'destroy']); // DELETE /api/tests/{id}
});

// products
Route::prefix('products')->middleware('apikey')->group(function () {
    Route::get('/', [ProductController::class, 'index']);     // GET /api/products
    Route::post('/decrypt', [ProductController::class, 'decryptResponse']);
    Route::get('{id}', [ProductController::class, 'show']);   // GET /api/products/{id}
    Route::post('/', [ProductController::class, 'store']);    // POST /api/products
    Route::put('{id}', [ProductController::class, 'update']); // PUT /api/products/{id}
    Route::delete('{id}', [ProductController::class, 'destroy']); // DELETE /api/products/{id}
});