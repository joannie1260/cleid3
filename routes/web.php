<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRIDController;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

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

Route::get('/stratego', function () {
    return view('stratego');
});

/* Carte QR */
Route::get('/qrid={id}&type=stratego', 'App\Http\Controllers\QRIDController@showLinks');
Route::get('/qrid={id}&type=vcard', 'App\Http\Controllers\QRIDController@showVcard');

Route::get('/', 'App\Http\Controllers\QRIDController@showNVcard');

/* Portail ID-3 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Admin*/
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'listusers'])->name('admin.users');
    Route::put('/admin/users/update-all', [AdminController::class, 'updateAllUsers'])->name('admin.users.updateAll');

});

// Route::get('/{locale?}', function ($locale = null) {
//     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//         app()->setLocale($locale);
//     }
    
//     return view('stratego');
// });

require __DIR__.'/auth.php';
