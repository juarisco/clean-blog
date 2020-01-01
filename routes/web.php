<?php

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
    return view('frontend.blog');
});

Route::get('post', function () {
    return view('frontend.post');
})->name('post');

Route::get('admin/home', function () {
    return view('backend.home');
});

Route::get('admin/post', function () {
    return view('backend.post.post');
});

Route::get('admin/tag', function () {
    return view('backend.tag.tag');
});

Route::get('admin/category', function () {
    return view('backend.category.category');
});