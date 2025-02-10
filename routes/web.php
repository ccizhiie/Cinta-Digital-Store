<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CashierMiddleware;
use App\Http\Middleware\LeaderMiddleware;
use App\Http\Middleware\MemberMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', function(){
        return view('admin.index');
    })->name('admin.dashboard');

    Route::resource('category', CategoryController::class);
    Route::resource('supplier', SupplierController::class);


});

Route::middleware(['auth', CashierMiddleware::class])->group(function () {
    Route::get('/cashier/dashboard', function(){
        return view('cashier.index');
    });

});

Route::middleware(['auth', LeaderMiddleware::class])->group(function () {
    Route::get('/leader/dashboard', function(){
        return view('leader.index');
    });

});

Route::middleware(['auth', MemberMiddleware::class])->group(function () {
    Route::get('/member/dashboard', function(){
        return view('member.index');
    });

});
