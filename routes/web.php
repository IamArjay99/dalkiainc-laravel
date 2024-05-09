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
use App\Http\Controllers\CertificationsAndAwardsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CompanyHistoryController;
use App\Http\Controllers\MissionAndVisionController;
use App\Http\Controllers\QualityPolicyController;
use App\Http\Controllers\ScopeAndServicesController;

// WEBSITE
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/projects', [WebsiteController::class, 'projects'])->name('website.projects');
Route::get('/certifications-and-awards', [WebsiteController::class, 'certifications_and_awards'])->name('website.certifications-and-awards');
Route::get('/careers', [WebsiteController::class, 'careers'])->name('website.careers');
Route::get('/careers/{id}', [WebsiteController::class, 'career_details'])->name('website.careers.details');
Route::get('/contacts', [WebsiteController::class, 'contacts'])->name('website.contacts');

// LOGIN & LOGOUT
Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('auth.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// AUTHENTICATED REQUIRED
Route::group(['middleware' => 'auth'], function () {

    // DASHBOARD
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // PROJECTS
    Route::get('/admin/projects', [ProjectController::class, 'index'])->name('admin.projects');
    Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/admin/projects/save', [ProjectController::class, 'save'])->name('admin.projects.save');
    Route::get('/admin/projects/{id}/view', [ProjectController::class, 'view'])->name('admin.projects.view');
    Route::get('/admin/projects/{id}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/admin/projects/{id}/update', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/admin/projects/{id}/delete', [ProjectController::class, 'delete'])->name('admin.projects.delete');

    // CERTIFICATIONS AND AWARDS
    Route::get('/admin/certifications-and-awards', [CertificationsAndAwardsController::class, 'index'])->name('admin.certifications-and-awards');
    Route::get('/admin/certifications-and-awards/create', [CertificationsAndAwardsController::class, 'create'])->name('admin.certifications-and-awards.create');
    Route::post('/admin/certifications-and-awards/save', [CertificationsAndAwardsController::class, 'save'])->name('admin.certifications-and-awards.save');
    Route::get('/admin/certifications-and-awards/{id}/view', [CertificationsAndAwardsController::class, 'view'])->name('admin.certifications-and-awards.view');
    Route::get('/admin/certifications-and-awards/{id}/edit', [CertificationsAndAwardsController::class, 'edit'])->name('admin.certifications-and-awards.edit');
    Route::put('/admin/certifications-and-awards/{id}/update', [CertificationsAndAwardsController::class, 'update'])->name('admin.certifications-and-awards.update');
    Route::delete('/admin/certifications-and-awards/{id}/delete', [CertificationsAndAwardsController::class, 'delete'])->name('admin.certifications-and-awards.delete');
    
    // CAREERS
    Route::get('/admin/careers', [CareerController::class, 'index'])->name('admin.careers');
    Route::get('/admin/careers/create', [CareerController::class, 'create'])->name('admin.careers.create');
    Route::post('/admin/careers/save', [CareerController::class, 'save'])->name('admin.careers.save');
    Route::get('/admin/careers/{id}/view', [CareerController::class, 'view'])->name('admin.careers.view');
    Route::get('/admin/careers/{id}/edit', [CareerController::class, 'edit'])->name('admin.careers.edit');
    Route::put('/admin/careers/{id}/update', [CareerController::class, 'update'])->name('admin.careers.update');
    Route::delete('/admin/careers/{id}/delete', [CareerController::class, 'delete'])->name('admin.careers.delete');
    
    // COMPANY HISTORY
    Route::get('/admin/company-history', [CompanyHistoryController::class, 'index'])->name('admin.company-history');
    Route::get('/admin/company-history/create', [CompanyHistoryController::class, 'create'])->name('admin.company-history.create');
    Route::post('/admin/company-history/save', [CompanyHistoryController::class, 'save'])->name('admin.company-history.save');
    Route::get('/admin/company-history/{id}/view', [CompanyHistoryController::class, 'view'])->name('admin.company-history.view');
    Route::get('/admin/company-history/{id}/edit', [CompanyHistoryController::class, 'edit'])->name('admin.company-history.edit');
    Route::put('/admin/company-history/{id}/update', [CompanyHistoryController::class, 'update'])->name('admin.company-history.update');
    Route::delete('/admin/company-history/{id}/delete', [CompanyHistoryController::class, 'delete'])->name('admin.company-history.delete');

    // MISSION AND VISION
    Route::get('/admin/mission-and-vision', [MissionAndVisionController::class, 'index'])->name('admin.mission-and-vision');
    Route::get('/admin/mission-and-vision/{id}/edit', [MissionAndVisionController::class, 'edit'])->name('admin.mission-and-vision.edit');
    Route::put('/admin/mission-and-vision/{id}/update', [MissionAndVisionController::class, 'update'])->name('admin.mission-and-vision.update');

    // QUALITY POLICY
    Route::get('/admin/quality-policy', [QualityPolicyController::class, 'index'])->name('admin.quality-policy');
    Route::get('/admin/quality-policy/{id}/edit', [QualityPolicyController::class, 'edit'])->name('admin.quality-policy.edit');
    Route::put('/admin/quality-policy/{id}/update', [QualityPolicyController::class, 'update'])->name('admin.quality-policy.update');

    // SCOPE AND SERVICES
    Route::get('/admin/scope-and-services', [ScopeAndServicesController::class, 'index'])->name('admin.scope-and-services');
    Route::get('/admin/scope-and-services/create', [ScopeAndServicesController::class, 'create'])->name('admin.scope-and-services.create');
    Route::post('/admin/scope-and-services/save', [ScopeAndServicesController::class, 'save'])->name('admin.scope-and-services.save');
    Route::get('/admin/scope-and-services/{id}/view', [ScopeAndServicesController::class, 'view'])->name('admin.scope-and-services.view');
    Route::get('/admin/scope-and-services/{id}/edit', [ScopeAndServicesController::class, 'edit'])->name('admin.scope-and-services.edit');
    Route::put('/admin/scope-and-services/{id}/update', [ScopeAndServicesController::class, 'update'])->name('admin.scope-and-services.update');
    Route::delete('/admin/scope-and-services/{id}/delete', [ScopeAndServicesController::class, 'delete'])->name('admin.scope-and-services.delete');
});