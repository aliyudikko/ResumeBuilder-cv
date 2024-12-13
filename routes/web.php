<?php

use App\Http\Controllers\ResumeBuilderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/home', 'resume.landing');

Route::redirect('/', '/cv')->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {

    

    Route::get('/cv/template1/{id}', [EmployeeController::class, 'template1'])->name('cv.template1');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/cv/template2/{id}', [EmployeeController::class, 'template2'])->name('cv.template2');
    Route::get('/cv/print/{id}', [EmployeeController::class, 'print'])->name('cv.print');
    Route::get('/cv/template3/{id}', [EmployeeController::class, 'template3'])->name('cv.template3');
    Route::get('/cv/print/{id}', [ResumeBuilderController::class, 'print'])->name('cv.print');
    Route::get('/cv/template2/{id}', [ResumeBuilderController::class, 'template2'])->name('cv.template2');
    Route::get('/cv/template3/{id}', [ResumeBuilderController::class, 'template3'])->name('cv.template3');
    Route::get('/cv/template1/{id}', [ResumeBuilderController::class, 'template1'])->name('cv.template1');
    Route::resource('cv', ResumeBuilderController::class);
   
    
});


Route::get('/dashboard', function () {
    return view('dashboard');

    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  
    
   // Route::get('/cv/print/{id}', [ResumeBuilderController::class, 'print'])->name('cv.print');
    //Route::get('/cv/template2/{id}', [ResumeBuilderController::class, 'template2'])->name('cv.template2');
    //Route::get('/cv/template3/{id}', [ResumeBuilderController::class, 'template3'])->name('cv.template3');
   // Route::get('/cv/template1/{id}', [ResumeBuilderController::class, 'template1'])->name('cv.template1');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
