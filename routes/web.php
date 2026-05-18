<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;

Route::get('/halo', function () {
    return view('halo', ['nama' => 'Siswa SMK']);
});

Route::resource('tugas', TugasController::class);
