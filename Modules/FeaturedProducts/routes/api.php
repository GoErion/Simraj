<?php

use Illuminate\Support\Facades\Route;
use Modules\FeaturedProducts\Http\Controllers\FeaturedProductsController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('featuredproducts', FeaturedProductsController::class)->names('featuredproducts');
});
