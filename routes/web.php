<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/profissional', function () {
    return view('profissional');
});

Route::get('/agenda', function () {
    return view('agenda');
});
