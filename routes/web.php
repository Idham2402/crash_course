<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name = 'Idham was here';
    return view('test', compact('name'));
});
