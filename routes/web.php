<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', function() {
    return view('home');
})->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');

Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('companies', [CompanyController::class, 'index'])->middleware('auth');
Route::get('companies/create', [CompanyController::class, 'create'])->middleware('auth');
Route::get('companies/{company:slug}', [CompanyController::class, 'show'])->middleware('auth');
Route::post('companies', [CompanyController::class, 'store'])->middleware('auth');
Route::get('companies/{company}/edit', [CompanyController::class, 'edit'])->middleware('auth');
Route::patch('companies/{company}', [CompanyController::class, 'update'])->middleware('auth');
Route::delete('companies/{company}', [CompanyController::class, 'destroy'])->middleware('auth');

Route::get('users', [UserController::class, 'index'])->middleware('auth');
Route::get('users/create', [UserController::class, 'create'])->middleware('auth');
Route::get('users/{user}', [UserController::class, 'show'])->middleware('auth');
Route::post('users', [UserController::class, 'store'])->middleware('auth');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->middleware('auth');
Route::patch('users/{user}', [UserController::class, 'update'])->middleware('auth');
Route::delete('users/{user}', [UserController::class, 'destroy'])->middleware('auth');
Route::get('users/company/{company:slug}', [UserController::class, 'company'])->middleware('auth');
