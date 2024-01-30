<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModeleController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
// Route::middleware('auth')->group(function () {
//     Route::get('dashboard', function () {
//         return view('layouts.dashboard');
//     })->name('dashboard');
    Route::middleware('auth')->group(function () {
    Route::get('modeles', function () {
        return view('layouts.modeles');
    })->name('modeles');
    Route::controller(ModeleController::class)->prefix('modeles')->group(function () {
        Route::get('', 'index')->name('modeles');
        Route::get('create', 'create')->name('modeles.create');
        Route::post('store', 'store')->name('modeles.store');
        Route::get('show/{id}', 'show')->name('modeles.show');
        Route::get('edit/{id}', 'edit')->name('modeles.edit');
        Route::put('edit/{id}', 'update')->name('modeles.update');
        Route::delete('destroy/{id}', 'destroy')->name('modeles.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});