<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "hello next laravel";
});

require __DIR__.'/auth.php';
