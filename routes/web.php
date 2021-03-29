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
Route::get('/admin', function () {
    return view('layouts.admin_layout');
});
Route::get('/category', function () {
    return view('admin.category');
});
Route::get('/sub-category', function () {
    return view('admin.sub-category');
});
Route::get('/tags', function () {
    return view('admin.tags');
});
Route::get('/condinent', function () {
    return view('admin.condinent');
});
Route::get('/country', function () {
    return view('admin.country');
});
Route::get('/source', function () {
    return view('admin.source');
});
Route::get('/ads', function () {
    return view('admin.ads');
});
Route::get('/news_video', function () {
    return view('admin.news_video');
});






