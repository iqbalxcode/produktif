<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/home', function () {
    return view('frontend.home', [
        'nama' => 'Raditya',
        'pelajaran' => ['Matematika', 'IPA', 'Bahasa Indonesia']
    ]);
});