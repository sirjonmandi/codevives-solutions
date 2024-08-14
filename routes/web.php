<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('home');

// Route::get('/dashboard',[SiteController::class, 'updateHero'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard',[SiteController::class, 'gotodashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/dashboard/editpages',[SiteController::class, 'editPages'])->name('editpages');
    route::post('/dashboard/updatehero', [SiteController::class,'updateHero'])->name('updateHero');
    route::post('/dashboard/updateportfolio', [SiteController::class,'updatePortfolio'])->name('updatePortfolio');
    route::post('/dashboard/updateservice', [SiteController::class,'updateService'])->name('updateServices');
    route::post('/dashboard/updateproducts', [SiteController::class,'updateProducts'])->name('updateProducts');
    route::post('/dashboard/updatecareer', [SiteController::class,'updateCareer'])->name('updateCareer');
    route::post('/dashboard/updatefooter', [SiteController::class,'updateFooter'])->name('updateFooter');

    route::get('/dashboard/service',[SiteController::class,'gotoService'])->name('service');
    route::post('/dashboard/addservice',[SiteController::class, 'addService'])->name('addService');

    route::get('/dashboard/subcsribers', [SiteController::class, 'subscribers'])->name("gotoSubs");

    Route::post('updateService/{id}',[SiteController::class,'service'])->name("changeservice");

    Route::get('deletesubscriber/{id}',[SiteController::class,'deletesubs'])->name("deletesubs");
    Route::get('deleteservices/{id}',[SiteController::class,'deleteservice'])->name("deleteservice");

    Route::get('/markascompleted/{id}',[SiteController::class,'markAsCompleted'])->name('markAsCompleted');
    Route::get('/markasrejected/{id}',[SiteController::class,'markAsRejected'])->name('markAsRejected');

    Route::get('/goto/plans',[SiteController::class,'gotoplans'])->name('gotoplans');
    Route::post('update/basicplan',[SiteController::class,'updatebasic'])->name('updatebasic');
    Route::post('update/proplan',[SiteController::class,'updatepro'])->name('updatepro');
    Route::post('update/businessplan',[SiteController::class,'updatebusiness'])->name('updatebusiness');
});

require __DIR__.'/auth.php';

route::post('/newsubscriber',[SiteController::class,'newsubs'])->name("newsubs");
route::Post('requiest/appointment',[AppointmentController::class,'addAppointment'])->name('addAppointment');
