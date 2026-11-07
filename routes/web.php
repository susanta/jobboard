<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function() {
    return '<h1>Available jobs</h1>';
})->name('jobs');

Route::get('/test', function() {
    return response('Hello', 200);
});

Route::get('/notfound', function() {
    return new Response('Page not found', 404);
});

Route::get('/test-new', function() {
    // return response('<h1>Hello header Value', 200)->header('Content-Type', 'text/html'); //adding header value

    return response()->json(['name' => 'Some name'])->cookie('name', 'Some value', 60); // respnse json & add cookie as well with time like 60 min
});

Route::get('/download', function() {
    return response()->download(public_path('favicon.ico')); // download file
});

// read cookie value
Route::get('/read-cookie', function(Request $request) {
    $cookieValue = $request->cookie('name');
    return response()->json(['cookie'=> $cookieValue]);
});