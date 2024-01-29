<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Settings\UserSetup\RoleController;
use Illuminate\Support\Facades\Auth;
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
    if(Auth::check()){
        return redirect('dashboard');
    } else {
        return redirect('login');
    }
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',  [DashboardController::class, 'index'])->middleware(['verified'])->name('dashboard');
    Route::post('/set-record-per-page',  [AuthenticatedSessionController::class, 'setRecordPerPage']);

    Route::middleware(['admin'])->group(function () {
        Route::resource('roles', RoleController::class);
    });

});

require __DIR__.'/auth.php';
