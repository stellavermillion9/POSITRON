<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MabaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('register/hmj', [App\Http\Controllers\AuthController::class, 'showFormRegister'])->name('register');
Route::post('register/hmj', [App\Http\Controllers\AuthController::class, 'register']);


Route::post('/import_excel', [App\Http\Controllers\ImportControllers::class, 'import']);

Route::group(['middleware' => 'auth'], function () {

    Route::resource('maba', MabaController::class);
    Route::post('maba/import', [App\Http\Controllers\MabaController::class, 'import'])->name('maba.import');
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

Route::get('/', function () {
    return view('frontend.frontend');
});

Route::get('cari', [\App\Http\Controllers\DataController::class, 'index']);
Route::get('tentang', function () {
    return view('frontend.tentang');
});
