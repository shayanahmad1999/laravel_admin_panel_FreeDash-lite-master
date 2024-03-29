<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/login');
})->name('admin.login');

Route::get('/signup', function () {
    return view('auth/signup');
})->name('admin.signup');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');

Route::get('/modals', function () {
    return view('modal');
})->name('admin.modal');

Route::get('/basic-table', function () {
    return view('tables/basic');
})->name('admin.basicTable');

Route::get('/data-table', function () {
    return view('tables/data');
})->name('admin.dataTable');

Route::get('/form-input', function () {
    return view('forms/input');
})->name('admin.inputForm');

Route::get('/form-grid', function () {
    return view('forms/grid');
})->name('admin.gridForm');

