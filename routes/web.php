<?php

use App\Http\Controllers\CompasskeyCredential\CompasskeyCredentialUpdateController;
use App\Http\Controllers\GuestyCredential\GuestyCredentialUpdateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/reservations', [ReservationsController::class, 'index'])->name('reservation.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::patch('/guesty-credential', GuestyCredentialUpdateController::class)->name('guesty_credential.update');    
    Route::patch('/compasskey-credential', CompasskeyCredentialUpdateController::class)->name('compasskey_credential.update');    
});

require __DIR__.'/auth.php';
