<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\chennai\EmployeeController;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/test', function () {return view('test');})->name('test');
    Route::get('/add-employee',[EmployeeController::class,'add_employee'])->name('add-employee');
    Route::get('/all-employee',[EmployeeController::class,'all_employee'])->name('all-employee');
});
