<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

Route::get('/', function () {
    return view('ambilfile');
});

Route::get('ambilfile', [BiodataController::class, 'ambilfile']);