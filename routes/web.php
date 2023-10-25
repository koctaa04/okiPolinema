<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/detailOki', [HomepageController::class, 'showDetailOki'])->name('homepage.detailOki');
Route::get('/register{id}', [HomepageController::class, 'showRegister'])->name('homepage.register');
Route::get('/login', [HomepageController::class, 'showLogin'])->name('homepage.login');

// DASHBOARD
Route::get('/dashboard', function () {
    
});
Route::get('/dashboard', [DashboardController::class, 'showIndex'])->name('dashboard');
Route::get('/dashboard/detailOki/{id}', [DashboardController::class, 'showDetailOki'])->name('dashboard.detaillOki');