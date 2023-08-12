<?php

use App\Http\Livewire\Administrator\AdministratorController;
use App\Http\Livewire\Asesor\AsesorController;
use App\Http\Livewire\Carrillo\CarrilloController;
use App\Http\Livewire\Category\CategoryController;
use App\Http\Livewire\CategoryAdviser\CategoryAdviserController;
use App\Http\Livewire\Categorycoordinator\CategoryCordinatorController;
use App\Http\Livewire\CategoryManager\CategoryManagerController;
use App\Http\Livewire\CategoryRegional\CategoryRegionalController;
use App\Http\Livewire\Coins\CoinsController;
use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Livewire\Morelos\MorelosController;
use App\Http\Livewire\Playa1\Playa1Controller;
use App\Http\Livewire\Playa2\Playa2Controller;
use App\Http\Livewire\Tulum\TulumController;
use Illuminate\Routing\RouteGroup;
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
    return view('auth.login');
});

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('dashboard',Dashboard::class)->name('dashboard');

    Route::group(['prefix' => 'moneda'], function(){
        Route::get('/', CoinsController::class)->name('moneda');
    });

    Route::group(['prefix' => 'Boveda'], function(){
        Route::get('Carrillo', CarrilloController::class)->name('indexCarrillo');
        Route::get('Morelos', MorelosController::class)->name('indexMorelos');
        Route::get('Tulum', TulumController::class)->name('indexTulum');
        Route::get('Playa1', Playa1Controller::class)->name('indexPlaya1');
        Route::get('Playa2', Playa2Controller::class)->name('indexPlaya2');
    });

    Route::group(['prefix' => 'Categories'], function(){
        Route::get('Administrators', CategoryController::class )->name('indexCategories');
        Route::get('Advisers', CategoryAdviserController::class)->name('indexAdvisers');
        Route::get('Coordinator', CategoryCordinatorController::class)->name('indexCoordinator');
        Route::get('Gerente', CategoryManagerController::class)->name('indexManager');
        Route::get('Regional', CategoryRegionalController::class)->name('indexRegional');
    });

    Route::group(['prefix' => 'Incentivos'], function(){
        Route::get('Adminstrators', AdministratorController::class)->name('indexAdministrators');
        Route::get('Asesores', AsesorController::class)->name('indexAsesores');
    });
});
