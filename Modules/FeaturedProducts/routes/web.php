<?php

use Illuminate\Support\Facades\Route;
use Modules\FeaturedProducts\Http\Controllers\FeaturedProductsController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('featuredproducts', FeaturedProductsController::class)->names('featuredproducts');
});
