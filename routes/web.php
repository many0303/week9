<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('layouts/about');
});

Route::get('/property_grid', function () {
    return view('layouts/property_grid');
});
Route::get('/blog-grid', function () {
    return view('layouts/blog-grid');
});
Route::get('/property-single', function () {
    return view('layouts/property-single');
});
Route::get('/blog-single', function () {
    return view('layouts/blog-single');
});
Route::get('/agents-grid', function () {
    return view('layouts/agents-grid');
});
Route::get('/agents-single', function () {
    return view('layouts/agents-single');
});

Route::get('/contact', function () {
    return view('layouts/contact');
});
