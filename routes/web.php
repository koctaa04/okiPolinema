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

Route::get('/', function () {
    return view('homepage.index', [
        'title' => 'Homepage'
    ]);
});
Route::get('/about', function () {
    return view('homepage.about', [
        'title' => 'about'
    ]);
});
Route::get('/oki', function () {
    return view('homepage.oki', [
        'title' => 'oki'
    ]);
});
Route::get('/register', function () {
    return view('homepage.register', [
        'title' => 'Homepage'
    ]);
});

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'dashboard'
    ]);
});
Route::get('/dashboard/dpm', function () {
    return view('dashboard.dpm', [
        'title' => 'oki'
    ]);
});
Route::get('/dashboard/bem', function () {
    return view('dashboard.bem', [
        'title' => 'oki'
    ]);
});
Route::get('/dashboard/hmm', function () {
    return view('dashboard.hmm', [
        'title' => 'oki'
    ]);
});
Route::get('/dashboard/hme', function () {
    return view('dashboard.hme', [
        'title' => 'oki'
    ]);
});
Route::get('/dashboard/hmti', function () {
    return view('dashboard.hmti', [
        'title' => 'oki'
    ]);
});
Route::get('/dashboard/himania', function () {
    return view('dashboard.himania', [
        'title' => 'oki'
    ]);
});
Route::get('/dashboard/hms', function () {
    return view('dashboard.hms', [
        'title' => 'oki'
    ]);
});
Route::get('/dashboard/hmtk', function () {
    return view('dashboard.hmtk', [
        'title' => 'oki'
    ]);
});