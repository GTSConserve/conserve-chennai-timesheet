<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chennai\EmployeeController;
use App\Http\Controllers\Chennai\ProjectController;
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

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

// });
Route::group(['prefix' => 'super-admin', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'superAdmin'
],'namespace' => 'Chennai'], function () {
    // Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/add-employee',[EmployeeController::class,'add_employee'])->name('add-employee');
    Route::get('/all-employee',[EmployeeController::class,'all_employee'])->name('all-employee');


});
Route::group(['prefix' => 'location-head', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'locationHead'
],'namespace' => 'Chennai'], function () {

});
Route::group(['prefix' => 'hr-head', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'hrHead'
],'namespace' => 'Chennai'], function () {

});
Route::group(['prefix' => 'admin', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'admin'
],'namespace' => 'Chennai'], function () {

});
Route::group(['prefix' => 'project-manager-head', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'projectManagerHead'
],'namespace' => 'Chennai'], function () {

});

Route::group(['prefix' => 'project-manager', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'projectManager'
],'namespace' => 'Chennai'], function () {

});
Route::group(['prefix' => 'project-lead', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'projectLead'
],'namespace' => 'Chennai'], function () {

});

Route::group(['prefix' => 'team-lead', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'teamLead'
],'namespace' => 'Chennai'], function () {

});

Route::group(['prefix' => 'employee', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'employee'
],'namespace' => 'Chennai'], function () {

});

Route::get('/activity',[ProjectController::class,'add_activity'])->name('activity');
Route::get('/task',[ProjectController::class,'add_task'])->name('task');
Route::get('/project',[ProjectController::class,'add_project'])->name('project');

