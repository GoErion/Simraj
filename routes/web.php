<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'home'])
    ->name('home');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //product
    Route::controller(ProductController::class)->group(function ()
    {
        Route::get('product', 'index')
            ->name('product.index');

        Route::post('product', 'store')
            ->name('product.store');

        Route::get('product/create', 'create')
            ->name('product.create');
    });

    //forum
    Route::controller(ForumController::class)->group(function ()
    {
        Route::get('forum', 'index')
            ->name('forum.index');

        Route::post('forum', 'store')
            ->name('forum.store');

        Route::get('forum/create', 'create')
            ->name("forum.create");
    });

    //Services
    Route::controller(ServiceController::class)->group(function ()
    {
        Route::get('service', 'index')
            ->name('service.index');
    });

    //support
    Route::controller(SupportController::class)->group(function ()
    {
        Route::get('support', 'index')
            ->name('support.index');
    });
});


require __DIR__.'/auth.php';
