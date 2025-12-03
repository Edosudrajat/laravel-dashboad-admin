<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KaryawanController::class, 'index'])->name('mahasiswa.index');
