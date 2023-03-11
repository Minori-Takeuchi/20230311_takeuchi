<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManagementController;


// お問い合わせ
Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/thanks', [ContactController::class, 'send'])->name('contact.thanks');

// 管理画面
Route::get('/management', [ManagementController::class, 'index'])->name('management.index');
Route::get('/management/search', [ManagementController::class, 'search'])->name('management.search');
Route::post('/management/delete', [ManagementController::class, 'delete'])->name('management.delete');

// トップ画面
Route::get('/', function () {
    return view('welcome');
});
