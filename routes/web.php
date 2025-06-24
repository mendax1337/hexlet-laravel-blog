<?php

Route::get('/', function () {
    return 'hello, world!';
})->name('root');

Route::get('about', function () {
    return view('about');
})->name('about');
