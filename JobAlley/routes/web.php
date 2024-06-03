<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyjobController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobsController;

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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
// auth aka registered users only can view home and the other pages 
route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

route::get('post', [HomeController::class, 'post'])->middleware(['auth','admin']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::get('/profile/myjobs', [MyjobController::class, 'job'])->middleware(['auth','user'])->name('profile.myjobs');

Route::resource('application', ApplicationController::class)->middleware(['auth', 'admin']);

Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::get('/create', [JobsController::class, 'create'])->name('create');
    Route::post('/create', [JobsController::class, 'save'])->name('jobs.save');
    Route::delete('/delete/{id}', [JobsController::class, 'delete'])->name('jobs.delete');
    Route::get('/edit/{id}', [JobsController::class, 'edit'])->name('jobs.edit');
    Route::post('/update/{id}', [JobsController::class, 'update'])->name('jobs.update');
});

require __DIR__.'/auth.php';
