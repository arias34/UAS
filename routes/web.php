<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', function () {
    return view('admin.login');
});

Route::get('login', function () {
    return view('admin.login');
})->name('login');

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_action'])->name('register.action');
Route::match(['get', 'post'],'postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::match(['get', 'post'],'logout', [LoginController::class, 'logout'])->name('logout');
Route::get('password', [LoginController::class, 'password'])->name('password');
Route::post('password', [LoginController::class, 'password_action'])->name('password.action');
route::get('home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
route::get('mahasiswa', [MahasiswaController::class, 'data']);
route::get('mahasiswa/add', [MahasiswaController::class, 'add']);
route::post('mahasiswa', [MahasiswaController::class, 'addProcess']);
route::get('mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
route::patch('mahasiswa/{id}', [MahasiswaController::class, 'editProcess']);
route::delete('mahasiswa/{id}', [MahasiswaController::class, 'delete']);

route::get('dosen', [DosenController::class, 'data']);
route::get('dosen/add', [DosenController::class, 'add']);
route::post('dosen', [DosenController::class, 'addProcess']);
route::get('dosen/edit/{id}', [DosenController::class, 'edit']);
route::patch('dosen/{id}', [DosenController::class, 'editProcess']);
route::delete('dosen/{id}', [DosenController::class, 'delete']);

route::get('user', [UserController::class, 'data']);
route::get('admin/add', [UserController::class, 'add']);
route::post('user', [UserController::class, 'addProcess']);
route::delete('user/{id}', [UserController::class, 'delete']);

Route::get('profile', [LoginController::class, 'profile'])->name('profile');
Route::post('profile', [LoginController::class, 'profileUpdate'])->name('profileUpdate');

});



route::get('pegawai', [PegawaiController::class, 'data']);
route::get('pegawai/add', [PegawaiController::class, 'add']);
route::post('pegawai', [PegawaiController::class, 'addProcess']);
route::get('pegawai/edit/{id}', [PegawaiController::class, 'edit']);
route::patch('pegawai/{id}', [PegawaiController::class, 'editProcess']);
route::delete('pegawai/{id}', [PegawaiController::class, 'delete']);
