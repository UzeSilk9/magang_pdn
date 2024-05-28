<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Mapel\MapelController;

Route::get('/', [AuthController::class,'index'])->name('/');
Route::get('dash', [HomeController::class,'dash'])->name('dash');
Route::get('about', [HomeController::class,'about'])->name('about');
Route::get('register', [AuthController::class,'daftar'])->name('register');
Route::post('register.post', [AuthController::class,'register'])->name('register.post');
Route::post('login',[AuthController::class, 'login'])->name('login');

Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('tambah',[HomeController::class,'tambah'])->name('tambah');
Route::post('tambah.save',[HomeController::class, 'save'])->name('save');
Route::get('edit.data/{id}',[HomeController::class, 'edit'])->name('edit');
Route::post('update.data/{id}',[HomeController::class, 'update'])->name('update');
Route::get('hapus.data/{id}',[HomeController::class, 'hapus'])->name('hapus');

Route::get('mapel',[MapelController::class, 'index'])->name('mapel');
Route::get('tambahm',[MapelController::class,'tambahm'])->name('tambahm');
Route::post('tambahm.savem',[MapelController::class, 'savem'])->name('savem');
Route::get('editm.data/{id}',[MapelController::class, 'editm'])->name('editm');
Route::post('updatem.data/{id}',[MapelController::class, 'updatem'])->name('updatem');
Route::get('hapusm.data/{id}',[MapelController::class, 'hapusm'])->name('hapusm');
