<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmployeesController::class, 'index'])->name('employees.index');

Route::get('/create', [EmployeesController::class, 'create'])->name('employees.create');

Route::post('/create', [EmployeesController::class, 'store'])->name('employees.store');

