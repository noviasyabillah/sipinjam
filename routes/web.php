<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', function () {
    return 'Halo, Laravel!';
});
 
Route::get('/halo/{nama}', function ($nama) {
    return 'Halo, ' . $nama . '!';
});
Route::get('/coba', function () {
    return view('coba');
});
use App\Http\Controllers\AlatController;

Route::resource('alat', AlatController::class);