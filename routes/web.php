<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('home');

// Route::get('/dashboard',[SiteController::class, 'updateHero'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/dashboard/editpages',[SiteController::class, 'editPages'])->name('editpages');
    route::post('/dashboard/updatehero', [SiteController::class,'updateHero'])->name('updateHero');
    route::post('/dashboard/updateportfolio', [SiteController::class,'updatePortfolio'])->name('updatePortfolio');
    route::post('/dashboard/updateservice', [SiteController::class,'updateService'])->name('updateServices');
    route::post('/dashboard/updatecareer', [SiteController::class,'updateCareer'])->name('updateCareer');
    route::post('/dashboard/updatefooter', [SiteController::class,'updateFooter'])->name('updateFooter');

    route::get('/dashboard/service',function (){return view('service');})->name('service');
    route::post('/dashboard/addservice',[SiteController::class, 'addService'])->name('addService');

    route::get('/dashboard/subcsribers', [SiteController::class, 'subscribers'])->name("gotoSubs");

    route::get('/dashboard/careers',[SiteController::class, 'gotoCareers'])->name('gotoCareers');
});

require __DIR__.'/auth.php';

route::post('/newsubscriber',[SiteController::class,'newsubs'])->name("newsubs");
