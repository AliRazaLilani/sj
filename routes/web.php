<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'duty'])->name('duty');
Route::post('admin/check', [App\Http\Controllers\Admin\DashboardController::class, 'check'])->name('admin.check');
Route::get('admin/checkout', [App\Http\Controllers\Admin\DashboardController::class, 'checkout'])->name('admin.checkout');



Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['auth','redirectHome']
    ], function () {
        Route::group([
            // 'prefix' => 'duty',
        ], function () {
                Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');
                // Route::get('/', [App\Http\Controllers\DutyController::class, 'index'])->name('duty');
                // Route::get('create', [App\Http\Controllers\DutyController::class, 'create'])->name('duty.create');
                // Route::post('store', [App\Http\Controllers\DutyController::class, 'store'])->name('duty.store');
                // Route::get('/', [DutyController::class, 'index'])->name('duty.add');
        });
});