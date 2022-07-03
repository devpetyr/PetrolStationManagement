<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\superAdmin\DashboardController;
use App\Http\Controllers\superAdmin\PetrolStationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [AuthController::class, 'index_login'])->name('login');
/*
|--------------------------------------------------------------------------
| superAdmin routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('superAdmin_dashboard');

    /*petrolStation routes*/
    Route::get('petrol-stations', [PetrolStationController::class, 'index'])->name('superAdmin_petrolStation_index');

/*
|--------------------------------------------------------------------------
| manager routes
|--------------------------------------------------------------------------
*/
