<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function() {
    return '<h1>Available jobs</h1>';
})->name('jobs');

Route::get('/test', function() {
    $url = route('jobs');
    return "<a href='$url'>Click Here</a>";
});

Route::post('/submit', function() {
    return 'Post Submit';
});

Route::match(['get', 'post'], '/submit', function() {
    return 'Post Submit';
});

// // any type of route
// Route::any('/submit', function() {
//     return 'Post Submit';
// });

Route::get('/api/users', function() {
    return [
        'name' => 'Example Name',
        'email' => 'example@test.com'
    ];
});