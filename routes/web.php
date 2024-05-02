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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProjectController;

// WEBSITE
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/projects', [WebsiteController::class, 'projects'])->name('website.projects');
Route::get('/certifications-and-awards', [WebsiteController::class, 'certifications_and_awards'])->name('website.certifications-and-awards');
Route::get('/careers', [WebsiteController::class, 'careers'])->name('website.careers');
Route::get('/careers/{id}', [WebsiteController::class, 'career_details'])->name('website.careers.details');
Route::get('/contacts', [WebsiteController::class, 'contacts'])->name('website.contacts');

// LOGIN & LOGOUT
Route::get('/admin', [LoginController::class, 'index'])->name('auth.login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('auth.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// AUTHENTICATED REQUIRED
Route::group(['middleware' => 'auth'], function () {

    // DASHBOARD
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/projects', [ProjectController::class, 'index'])->name('admin.projects');
});