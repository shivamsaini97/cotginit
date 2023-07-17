<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('about');
// });

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog-detail', function () {
    return view('blog-detail');
})->name('blog-detail');

<<<<<<< HEAD
Route::get('/it-services', function () {
    return view('it-services');
})->name('it-services');

Route::get('/detail-page', function () {
    return view('detail-page');
})->name('detail-page');

=======
>>>>>>> 9bb48ab261e2d7864db6b576c6fe9adbf3f5842d
Route::get('/blog', function () {
    return view('blog');
})->name('blog');