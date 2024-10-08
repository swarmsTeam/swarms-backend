<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\EventController;
use App\Http\Controllers\Dashboard\OrganizerController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\RoleConteoller;
use App\Http\Controllers\Dashboard\SponsorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:organizer'])
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {


    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');


    Route::get('/profile',[ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::put('/profile',[ProfileController::class, 'update'])
        ->name('profile.update');

    Route::resources([
        '/organizers' => OrganizerController::class,
        '/events' => EventController::class,
        '/sponsors' => SponsorController::class,
        '/roles' => RoleConteoller::class,
    ]);

});

require __DIR__.'/dashboard-auth.php';
