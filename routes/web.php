<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // dd(env('APP_NAME'));
    return view('welcome');
});

Route::get('/Contact-us',[ContactUsController::class, 'index']);

Route::prefix('news')->controller(NewsController::class)->group(function (){
    Route::get('all','index');
    Route::get('add','add');
    Route::get('edit','edit');
    Route::get('delete','delete');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(middleware: ['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',  [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
