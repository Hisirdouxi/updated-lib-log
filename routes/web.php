<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::get('/login', function () {
    return view('login');
}
);
