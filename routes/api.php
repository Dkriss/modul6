<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix("v1")->group(function() {
    Route::apiResource("product-category", ProductCategoryController::class);
    // TERDAPAT ROUTE SINGLE METHOD SEPERTI CONTOH BERIKUT
    // Route::get("blablabla", ProductCategoryController::class);
    // Route::post("blablabla", ProductCategoryController::class);
    // Route::put("blablabla", ProductCategoryController::class);
    // Route::delete("blablabla", ProductCategoryController::class);
});
