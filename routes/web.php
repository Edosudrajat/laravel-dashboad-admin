<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->controller(AuthController::class)->group(function() {

    Route::get('/welcome', 'welcome')->name('welcome');

    Route::get('/login', 'showLogin')->name('auth.login');

    Route::post('/login', 'login')->name('login');

    Route::get('/register', 'showRegister')->name('auth.register');

    Route::post('/register', 'register')->name('register');
});

Route::middleware('auth')->controller(EmployeesController::class)->group(function() {

    Route::get('/', 'index')->name('employees.index');

    Route::get('/create', 'create')->name('employees.create');

    Route::post('/create', 'store')->name('employees.store');

    Route::get('/show/{karyawan}', 'show')->name('employees.show');

    Route::delete('/delete/{karyawan}', 'destroy')->name('employees.destroy');

    Route::get('/edit/{karyawan}', 'edit')->name('employees.edit');

    Route::put('/{karyawan}/edit', 'update')->name('employees.update');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
