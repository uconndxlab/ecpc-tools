<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('programs', 'App\Http\Controllers\HigherEdProgramController');
