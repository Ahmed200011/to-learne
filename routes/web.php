<?php

use App\Http\Controllers\AccessorMutatorController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsController as ControllersNewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserStatusJobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});
Route::get('ahmed', function () {

    return view('ahmed');
});
// Route::get('/aa/{age}', function ($age) {
//     // dd(env('APP_NAME'));
//     echo "ahmed is $age";
//     // return view('welcome');
// })->middleware('is_young');
// Route::get('/{user}', function ($user) {
//     return view('welcome', compact('user'));
// })->where('user', '[A-Z]+');

// Route::get('/Contact-us', [ContactUsController::class, 'index'])->name('contact');
// Route::get('user/all', [UserController::class, 'index']);
// Route::get('user/add', [UserController::class, 'add']);

// Route::prefix('news')->controller(NewsController::class)->group(function () {
//     Route::get('all', 'index')->middleware('throttle:test');
//     Route::get('add', 'add');
//     Route::get('edit', 'edit');
//     Route::get('delete', 'delete');
// });

// Route::resource('branch',BranchController::class);
// Route::fallback(function () {
//     return view('no.path404');
// });

route::get('test',[AccessorMutatorController::class,'index']);
route::get('status',[UserStatusJobController::class,'index']);

Route::resource('Products', ProductController::class);
Route::resource('category', CategoryController::class);

Route::resource('news', NewsController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(middleware: ['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',  [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
