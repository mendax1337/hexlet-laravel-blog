<?php


Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/', function () {
    return 'hello, world!';
})->name('root');
*/
Route::get('about', function () {
    $tags = ['обучение', 'программирование', 'php', 'oop'];
    return view('about', ['tags' => $tags]);
})->name('about');

Route::get('articles', function () {
    return view('articles');
});
