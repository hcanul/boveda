<?php

use App\Http\Controllers\NominaToPdfController;
use App\Http\Livewire\Administrator\AdministratorController;
use App\Http\Livewire\Advisers\BTAdminstratorController;
use App\Http\Livewire\Advisers\BTCoordinadorController;
use App\Http\Livewire\Advisers\BTManagerController;
use App\Http\Livewire\Asesor\AsesorController;
use App\Http\Livewire\Asignar\AsignarController;
use App\Http\Livewire\Carrillo\CarrilloController;
use App\Http\Livewire\Category\CategoryController;
use App\Http\Livewire\CategoryAdviser\CategoryAdviserController;
use App\Http\Livewire\Categorycoordinator\CategoryCordinatorController;
use App\Http\Livewire\CategoryManager\CategoryManagerController;
use App\Http\Livewire\CategoryRegional\CategoryRegionalController;
use App\Http\Livewire\Coins\CoinsController;
use App\Http\Livewire\Coordinator\CoordinatorController;
use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Livewire\DirGral\Coordinator\Coordinator;
use App\Http\Livewire\DirGral\Promotores\Promotores;
use App\Http\Livewire\DirGral\Rates\Rates;
use App\Http\Livewire\Manager\ManagerController;
use App\Http\Livewire\Morelos\MorelosController;
use App\Http\Livewire\PaySheet\Payroll\ColaboratorController;
use App\Http\Livewire\PaySheet\PayrollPrint\PayRollController;
use App\Http\Livewire\PaySheet\Salary\CalculateController;
use App\Http\Livewire\PaySheet\SalaryPeriods\SalaryPeriodsController;
use App\Http\Livewire\PaySheet\STSalary\STSalaryController;
use App\Http\Livewire\Permisos\PermisosController;
use App\Http\Livewire\Playa1\Playa1Controller;
use App\Http\Livewire\Playa2\Playa2Controller;
use App\Http\Livewire\Regional\RegionalController;
use App\Http\Livewire\Role\RoleController;
use App\Http\Livewire\Tulum\TulumController;
use App\Http\Livewire\User\UserController;
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
        Route::get('/', CoinsController::class)->name('moneda')->middleware('role_or_permission:superuser');
    });

    Route::middleware(['role_or_permission:superuser'])->group(function () {
        Route::group(['prefix' => 'Boveda'], function(){
            Route::get('Carrillo', CarrilloController::class)->name('indexCarrillo');
            Route::get('Morelos', MorelosController::class)->name('indexMorelos');
            Route::get('Tulum', TulumController::class)->name('indexTulum');
            Route::get('Playa1', Playa1Controller::class)->name('indexPlaya1');
            Route::get('Playa2', Playa2Controller::class)->name('indexPlaya2');
        });
        Route::group(['prefix' => 'administrador'], function () {
            Route::get('Users', UserController::class)->name('indexUsers');
            Route::get('roles', RoleController::class)->name('indexRoles');
            Route::get('permisos', PermisosController::class)->name('indexPermisos');
            Route::get('asignarpermisos', AsignarController::class)->name('indexAsignar');
        });

        Route::group(['prefix' => 'TiposSucursal'], function(){
            Route::get('Administrador', BTAdminstratorController::class )->name('indexBranchAdmin');
            Route::get('Coordinador', BTCoordinadorController::class )->name('indexBranchCoordi');
            Route::get('Gerente', BTManagerController::class )->name('indexBranchManager');
            Route::get('Regional', BTManagerController::class )->name('indexBranchRegional');
        });

        Route::group(['prefix' => 'Categories'], function(){
            Route::get('Administrators', CategoryController::class )->name('indexCategories');
            Route::get('Advisers', CategoryAdviserController::class)->name('indexAdvisers');
            Route::get('Coordinator', CategoryCordinatorController::class)->name('indexCoordinator');
            Route::get('Gerente', CategoryManagerController::class)->name('indexManager');
            Route::get('Regional', CategoryRegionalController::class)->name('indexRegional');
        });

        Route::group(['prefix' => 'DireccionGral'], function(){
            Route::get('Coordinator', Coordinator::class)->name('indexCoordinator');
            Route::get('Promotores', Promotores::class)->name('indexPromotores');
        });
    });

    Route::group(['prefix' => 'Incentivos'], function(){
        Route::get('Adminstrators', AdministratorController::class)->name('indexAdministrators')->middleware('role_or_permission:superuser|administrador');
        Route::get('Asesores', AsesorController::class)->name('indexAsesores')->middleware('role_or_permission:superuser|asesor');
        Route::get('Coordinadores', CoordinatorController::class)->name('indexCoordinadores')->middleware('role_or_permission:superuser|coordinador');
        Route::get('Gerentes', ManagerController::class)->name('indexGerentes')->middleware('role_or_permission:superuser|gerente');
        Route::get('Regionales', RegionalController::class)->name('indexRegionales')->middleware('role_or_permission:superuser|regional');
    });

    Route::middleware(['role_or_permission:superuser|nomina|ver nomina'])->group(function () {
        Route::group(['prefix' => 'Nomina'], function(){
            Route::get('Colaboradores',ColaboratorController::class)->name('indexNominaColab');
            Route::get('Periodos', SalaryPeriodsController::class)->name('indexNominaPeriodos');
            Route::get('TablaSalariosEstatica', STSalaryController::class)->name('indexTableSalary');
            Route::get('CalculoSalarios', CalculateController::class)->name('indexCalculateSalary');
            Route::get('ImpresionSalarios', PayRollController::class)->name('indexPtintedSalary');
            Route::get('Printer/{id}/{city}', [NominaToPdfController::class, 'Nomina'])->name('printerNomina');
        });
    });

    Route::middleware(['role_or_permission:superuser|regional|coordinador'])->group(function () {
        Route::group(['prefix' => 'DireccionGral'], function(){
            Route::get('Rates', Rates::class)->name('indexRates');
        });
    });

});
