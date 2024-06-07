<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiscuterController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PublierController;

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

Route::get('/annonce', [AnnonceController::class, 'index'])->name('annonce');

Route::get('/discuter', [DiscuterController::class, 'index'])->name('discuter');

Route::get('/paiement', [PaimentController::class, 'index'])->name('paiement');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/publier', [PublierController::class, 'index'])->name('publier');

Route::get('/dashboard', function () {
    return view('dashboard');


    
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
