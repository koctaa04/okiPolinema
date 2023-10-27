<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthDashboardController;
use App\Http\Controllers\AuthHomepageCoontroller;
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

Route::get('/', [HomepageController::class, 'showIndex'])->name('homepage');
Route::get('/about', [HomepageController::class, 'showAbout'])->name('homepage.about');
Route::get('/oki', [HomepageController::class, 'showOki'])->name('homepage.oki');
Route::get('/detailOki/{slug}', [HomepageController::class, 'showDetailOki'])->name('homepage.detailOki');

// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'showIndex'])->name('dashboard');
Route::get('/dashboard/detailOki/{slug}', [DashboardController::class, 'showDetailOki'])->name('dashboard.detailOki');
Route::put('/dashboard/editProfileOki/{id}', [DashboardController::class, 'editProfileOki'])->name('dashboard.editProfileOki');


// AUTH
Route::get('/login', [AuthHomepageCoontroller::class, 'showLoginForm'])->name('homepage.login');
Route::get('/dashboard/login', [AuthDashboardController::class, 'showLoginForm'])->name('login');
Route::post('/dashboard/login', [AuthDashboardController::class, 'login']);
Route::post('/dashboard/logout', [AuthDashboardController::class, 'logout'])->name('logout');