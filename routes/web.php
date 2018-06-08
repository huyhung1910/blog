<?php
// Route::get('/', function() {
//     return view('layouts.master');
// })
// / ;
Route::get('home1', function() {
    return view('pages.home1');
});
Route::get('post', function() {
    return view('pages.post');
});
Route::get('/', function() {
    return view('index');
});