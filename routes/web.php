<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function() {
    return '<h1>Available jobs</h1>';
})->name('jobs');

Route::get('/test', function(Request $request){
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header(),
    ];
});

Route::get('/users', function(Request $request){
    // return $request->query('name'); // get single query param
    // return $request->only(['name', 'age']); // get multiple query param
    // return $request->all(); // get all query param
    // return $request->has('name'); //check weather a query param exists or not
    return $request->except(['name']); // get all params except name

});