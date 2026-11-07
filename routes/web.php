<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function() {
    return '<h1>Available jobs</h1>';
})->name('jobs');

Route::get('/post/{id}', function(string $id) {
    return "Post" . $id;
})->where('id', '[a-zA-Z]+');

Route::get('/post/{id}/comments/{commentId}', function(string $id, string $commentId) {
    return "Post" . $id . "comment " . $commentId;
});