<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'company',
    'as' => 'company.'
], function () {
    Route::get('/', [CompanyController::class, 'index'])->name('index');
    Route::get('/create', [CompanyController::class, 'create'])->name('create');
    Route::post('/create', [CompanyController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [CompanyController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [CompanyController::class, 'update'])->name('update');
    Route::delete('/{id}', [CompanyController::class, 'destroy'])->name('delete');
});

Route::group([
    'prefix' => 'employer',
    'as' => 'employer.'
], function () {
    Route::get('/', [EmployerController::class, 'index'])->name('index');
    Route::get('/create', [EmployerController::class, 'create'])->name('create');
    Route::post('/create', [EmployerController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [EmployerController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [EmployerController::class, 'update'])->name('update');
    Route::delete('/{id}', [EmployerController::class, 'destroy'])->name('delete');
});
