<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\Backend\DashboardController;

use App\Http\Controllers\Backend\CompaniesController;

use App\Http\Controllers\Backend\EmployeesController;

use App\Http\Controllers\Backend\MyAccountController;
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

// Auth Start
Route::prefix('')->group(function () {
    Route::get('', [AuthController::class, 'login']);
    Route::post('login', [AuthController::class, 'post_login']);
    Route::get('logout', [AuthController::class, 'logout']);
  
});

// Auth End

// Backend start
Route::group(['middleware' => 'admin'], function(){

    // dashboard start
    Route::prefix('admin/dashboard')->group(function () {
        Route::get('', [DashboardController::class, 'index']);
    });
    // dashboard end

    // user start
    Route::prefix('admin/companies')->group(function () {
        Route::get('', [CompaniesController::class, 'index']);
        Route::get('create', [CompaniesController::class, 'create']);
        Route::post('create', [CompaniesController::class, 'store_update']);
        Route::get('edit/{id}', [CompaniesController::class, 'edit']);
        Route::post('edit/{id}', [CompaniesController::class, 'store_update']);
        Route::get('destroy/{id}', [CompaniesController::class, 'destroy']);
        Route::get('show/{id}', [CompaniesController::class, 'show']);
    });
    // user end    
   
    // employees start
     Route::prefix('admin/employees')->group(function () {
        Route::get('', [EmployeesController::class, 'index']);
        Route::get('create', [EmployeesController::class, 'create']);
        Route::post('create', [EmployeesController::class, 'store_update']);
        Route::get('edit/{id}', [EmployeesController::class, 'edit']);
        Route::post('edit/{id}', [EmployeesController::class, 'store_update']);
        Route::get('destroy/{id}', [EmployeesController::class, 'destroy']);
        Route::get('show/{id}', [EmployeesController::class, 'show']);
    });
    //employees end
    
    //myaccount start
    Route::prefix('admin/myaccount')->group(function () {
        Route::get('', [MyAccountController::class, 'index']);
        Route::post('add', [MyAccountController::class, 'update']);
    });
    //myaccount end
    

});

// Backend End


