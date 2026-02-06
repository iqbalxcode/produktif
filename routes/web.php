<?php

use Illuminate\Support\Facades\Route;

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
