<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chennai\EmployeeController;
use App\Http\Controllers\Chennai\ProjectController;
use App\Http\Controllers\Chennai\DashboardController;
use App\Http\Controllers\Chennai\TimeSheetController;
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

// =======================================<--Super Admin-->=========================================================
Route::group(['prefix' => 'super-admin', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'superAdmin'
], 'namespace' => 'Chennai'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('super-admin-dahboard');
    Route::get('/add-employee', [EmployeeController::class, 'add_employee'])->name('super-admin-add-employee');
    Route::get('/all-employee', [EmployeeController::class, 'all_employee'])->name('super-admin-all-employee');
    Route::get('/activity', [ProjectController::class, 'add_activity'])->name('super-admin-activity');
    Route::get('/task', [ProjectController::class, 'add_task'])->name('super-admin-task');
    Route::get('/project', [ProjectController::class, 'add_project'])->name('super-admin-project');
    Route::get('/project-assign', [ProjectController::class, 'project_assign'])->name('super-admin-project-assign');
    Route::get('/project-timesheet-add', [ProjectController::class, 'timesheetadd'])->name('super-admin-project-timesheet-add');
    Route::get('/project-timesheet-view', [ProjectController::class, 'timesheetview'])->name('super-admin-project-timesheet-view');
});
// =======================================<--Location Head-->=========================================================
Route::group(['prefix' => 'location-head', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'locationHead'
], 'namespace' => 'Chennai'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('location-head-dashboard');
    Route::get('/add-employee', [EmployeeController::class, 'add_employee'])->name('location-head-add-employee');
    Route::get('/all-employee', [EmployeeController::class, 'all_employee'])->name('location-head-all-employee');
    Route::get('/activity', [ProjectController::class, 'add_activity'])->name('location-head-activity');
    Route::get('/task', [ProjectController::class, 'add_task'])->name('location-head-task');
    Route::get('/sub-task', [ProjectController::class, 'add_sub_task'])->name('location-head-sub-task');
    Route::get('/project', [ProjectController::class, 'add_project'])->name('location-head-project');
    Route::get('/project-assign', [ProjectController::class, 'project_assign'])->name('location-head-project-assign');
    Route::get('/tree-structure', [ProjectController::class, 'project_tree_structure'])->name('location-head-tree-structure');
    // Route::get('/timesheet', [TimeSheetController::class, 'timesheet'])->name('location-head-timesheet');
    Route::get('/over-view', [TimeSheetController::class, 'over_view'])->name('location-head-over-view');
    Route::get('/add-timesheet', [TimeSheetController::class, 'add_timesheet'])->name('location-head-add-timesheet');
    Route::get('/aproved-timesheet', [TimeSheetController::class, 'aproved_timesheet'])->name('location-head-aproved-timesheet');
    Route::get('/pending-timesheet', [TimeSheetController::class, 'pending_timesheet'])->name('location-head-pending-timesheet');
    Route::get('/approval-timesheet', [TimeSheetController::class, 'approval_timesheet'])->name('location-head-approval-timesheet');
    Route::get('/project-wise', [TimeSheetController::class, 'project_wise_report'])->name('location-head-project-wise-report');
    Route::get('/my-project-reports', [TimeSheetController::class, 'project_wise_my_report'])->name('location-head-project-wise-myreport');
    Route::get('/monthly-project-reports', [TimeSheetController::class, 'monthly_wise_project_reports'])->name('location-head-monthly-wise-my-project-report');
});

// //
// Route::group(['prefix' => 'project-manager-head', 'middleware' => [
//     'auth:sanctum', config('jetstream.auth_session'), 'verified',
//     'projectManagerHead'
// ], 'namespace' => 'Chennai'], function () {
//     Route::get('/dashboard', [EmployeeController::class, 'add_employee'])->name('project-manager-headdashboard');
//     Route::get('/activity', [ProjectController::class, 'add_activity'])->name('activity');
//     Route::get('/task', [ProjectController::class, 'add_task'])->name('task');
//     Route::get('/project', [ProjectController::class, 'add_project'])->name('project');
//     Route::get('/project-timesheet-add', [ProjectController::class, 'timesheetadd'])->name('project-timesheet-add');
//     Route::get('/project-timesheet-view', [ProjectController::class, 'timesheetview'])->name('project-timesheet-view');
// });

// Route::group(['prefix' => 'project-manager', 'middleware' => [
//     'auth:sanctum', config('jetstream.auth_session'), 'verified',
//     'projectManager'
// ], 'namespace' => 'Chennai'], function () {
//     Route::get('/dashboard', [EmployeeController::class, 'add_employee'])->name('project-manager-dashboard');
//     Route::get('/task', [ProjectController::class, 'add_task'])->name('task');
//     Route::get('/project-assign', [ProjectController::class, 'project_assign'])->name('project-manager-project-assign');
//     Route::get('/project-timesheet-add', [ProjectController::class, 'timesheetadd'])->name('project-manager-project-timesheet-add');
//     Route::get('/project-timesheet-view', [ProjectController::class, 'timesheetview'])->name('project-manager-project-timesheet-view');
// });
// Route::group(['prefix' => 'project-lead', 'middleware' => [
//     'auth:sanctum', config('jetstream.auth_session'), 'verified',
//     'projectLead'
// ], 'namespace' => 'Chennai'], function () {
//     Route::get('/dashboard', [EmployeeController::class, 'add_employee'])->name('project-lead-dashboard');
//     Route::get('/project-assign', [ProjectController::class, 'project_assign'])->name('project-assign');
//     Route::get('/project-timesheet-add', [ProjectController::class, 'timesheetadd'])->name('project-timesheet-add');
//     Route::get('/project-timesheet-view', [ProjectController::class, 'timesheetview'])->name('project-timesheet-view');
// });

// Route::group(['prefix' => 'team-lead', 'middleware' => [
//     'auth:sanctum', config('jetstream.auth_session'), 'verified',
//     'teamLead'
// ], 'namespace' => 'Chennai'], function () {
//     Route::get('/dashboard', [EmployeeController::class, 'add_employee'])->name('team-lead-dashboard');
//     Route::get('/project-assign', [ProjectController::class, 'project_assign'])->name('project-assign');
//     Route::get('/project-timesheet-add', [ProjectController::class, 'timesheetadd'])->name('project-timesheet-add');
//     Route::get('/project-timesheet-view', [ProjectController::class, 'timesheetview'])->name('project-timesheet-view');
// });

Route::group(['prefix' => 'employee', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'employee'
], 'namespace' => 'Chennai'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('employee-dashboard');
    Route::get('/add-timesheet', [TimeSheetController::class, 'add_timesheet'])->name('employee-add-timesheet');
    Route::get('/aproved-timesheet', [TimeSheetController::class, 'aproved_timesheet'])->name('employee-aproved-timesheet');
    Route::get('/pending-timesheet', [TimeSheetController::class, 'pending_timesheet'])->name('employee-pending-timesheet');
    Route::get('/my-project-reports', [TimeSheetController::class, 'project_wise_my_report'])->name('employee-project-wise-myreport');

});


// Route::group(['prefix' => 'location-head', 'middleware' => [
//     'auth:sanctum', config('jetstream.auth_session'), 'verified',
//     'locationHead'
// ], 'namespace' => 'Chennai'], function () {
// });
// Route::group(['prefix' => 'hr-head', 'middleware' => [
//     'auth:sanctum', config('jetstream.auth_session'), 'verified',
//     'hrHead'
// ], 'namespace' => 'Chennai'], function () {
// });
// Route::group(['prefix' => 'admin', 'middleware' => [
//     'auth:sanctum', config('jetstream.auth_session'), 'verified',
//     'admin'
// ], 'namespace' => 'Chennai'], function () {
// });
