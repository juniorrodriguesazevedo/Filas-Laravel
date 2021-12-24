<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function() {
    return view('home');
});

Route::resource('contacts', ContactController::class)->only(['index', 'store']);
