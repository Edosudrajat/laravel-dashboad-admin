<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [EmployeesController::class, 'welcome'])->name('welcome');

Route::get('/', [EmployeesController::class, 'index'])->name('employees.index');

Route::get('/create', [EmployeesController::class, 'create'])->name('employees.create');

Route::post('/create', [EmployeesController::class, 'store'])->name('employees.store');

Route::get('/show/{karyawan}', [EmployeesController::class, 'show'])->name('employees.show');

Route::delete('/delete/{karyawan}', [EmployeesController::class, 'destroy'])->name('employees.destroy');

Route::get('/edit/{karyawan}', [EmployeesController::class, 'edit'])->name('employees.edit');

Route::put('/{karyawan}/edit', [EmployeesController::class, 'update'])->name('employees.update');

Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');

Route::post('/register', [AuthController::class, 'register'])->name('register');
