<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MainController as AdminMainController;


//importo controller
use App\Http\Controllers\Admin\ProjectController;


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

// php artisan route:list        mostra tutte le rotte definite

Route::get('/', [MainController::class, 'index'])->name('home');


Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

    Route::get('/dashboard', [AdminMainController::class, 'dashboard'])->name('dashboard');
    
    //definisco tutte le 7 rotte
    Route::resource('project', ProjectController::class);
    // php artisan route:list        mostra tutte le rotte definite
});

require __DIR__.'/auth.php';
