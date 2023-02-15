<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\PageController;
use App\Http\Controllers\Manager\DashboardController;
use App\Http\Controllers\Manager\OrderController;
use App\Http\Controllers\Manager\UserController;

Route::domain(env('DOMAIN'))->middleware('tenant')->group(function () {


    Route::get('/', [PageController::class, 'index']);

    //Manager
    Route::name('manager.')->prefix('manager')->group( function () {

        Route::get('/', [DashboardController::class, 'show'])->name('index');

        Route::get('/user/list', [UserController::class, 'list']);
        Route::get('/user/create', [UserController::class, 'create']);

        Route::get('/order/list',   [OrderController::class, 'list']);
        Route::get('/order/create', [OrderController::class, 'create']);
    });


});


require __DIR__.'/auth.php';
