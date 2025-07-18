<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\TopicController;

Route::get('/', [HomeController::class, 'index']);



Route::get('/about', function () {
    return view('about');
});

// Route::get('/team', function () {
//     return view('team');
// });

Route::get('/team', [TeamController::class, 'front_view']);

Route::get('/service/{id}', [ServiceController::class, 'front_view']);

Route::get('/training/{id}', [TrainingController::class, 'front_view']);

Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');
Route::get('/contact', function () {
    return view('contact');
});

Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'login']);

// Route::get('/admin/dashboard', function () {
//     return view('admin/dashboard');
// });
// Dashboard (only accessible if logged in)
Route::get('admin/dashboard', function () {
    return view('admin/dashboard');
})->middleware('auth')->name('admin.dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('admin/setting', [WebsiteController::class, 'index'])->name('admin.setting');
    Route::post('admin/setting', [WebsiteController::class, 'storeOrUpdate'])->name('website.save');
Route::get('admin/feature', [FeatureController::class, 'index'])->name('feature.list');
Route::get('admin/feature/add', [FeatureController::class, 'create'])->name('feature.create');
Route::get('admin/feature/edit/{id}', [FeatureController::class, 'edit'])->name('feature.edit');
Route::post('admin/feature/save', [FeatureController::class, 'store'])->name('feature.store');
Route::delete('admin/feature/delete/{id}', [FeatureController::class, 'destroy'])->name('feature.delete');

 Route::get('admin/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('admin/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::get('admin/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
Route::post('admin/service/store', [ServiceController::class, 'store'])->name('service.store');
Route::delete('admin/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');

Route::get('admin/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('admin/teams/create', [TeamController::class, 'create'])->name('teams.create');
Route::post('admin/teams', [TeamController::class, 'store'])->name('teams.store');
Route::get('admin/teams/{id}/edit', [TeamController::class, 'edit'])->name('teams.edit');
Route::put('admin/teams/{id}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('admin/teams/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');

Route::get('admin/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('admin/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('admin/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('admin/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::post('admin/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::get('admin/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');

 Route::get('admin/training', [TrainingController::class, 'index'])->name('training.index');
    Route::get('admin/training/create', [TrainingController::class, 'create'])->name('training.create');
    Route::post('admin/training', [TrainingController::class, 'store'])->name('training.store');
    Route::get('admin/training/{id}/edit', [TrainingController::class, 'edit'])->name('training.edit');
    Route::put('admin/training/{id}', [TrainingController::class, 'update'])->name('training.update');
    Route::delete('admin/training/{id}', [TrainingController::class, 'destroy'])->name('training.destroy');
Route::get('admin/enquiries', [EnquiryController::class, 'index'])->name('enquiry.index');
Route::get('admin/enquiry/{id}/edit', [EnquiryController::class, 'edit'])->name('enquiry.edit');
Route::put('/enquiry/{id}', [EnquiryController::class, 'update'])->name('enquiry.update');

Route::resource('admin/topics', TopicController::class);

});


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
