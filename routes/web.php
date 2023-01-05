<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chennai\EmployeeController;
use App\Http\Controllers\Chennai\ProjectController;
use App\Http\Controllers\Chennai\DashboardController;
use App\Http\Controllers\Chennai\TimeSheetController;
use App\Http\Controllers\Chennai\DashboardControllsController;


Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'location-head', 'middleware' => [
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
    'locationHead'
], 'namespace' => 'Chennai'], function () {
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('location-head-dashboard');
Route::get('/dashboard-controls',[DashboardControllsController::class, 'controls'])->name('location-head-dashboard-controls');
Route::get('/dashboard-skillings',[DashboardControllsController::class, 'skillings'])->name('location-head-dashboard-skillings');
Route::get('/dashboard-latest-project',[DashboardControllsController::class, 'latest_project'])->name('location-head-dashboard-latest-project');
Route::get('/dashboard-happenings',[DashboardControllsController::class, 'happenings'])->name('location-head-dashboard-happenings');
Route::get('/dashboard-hirings',[DashboardControllsController::class, 'hirings'])->name('location-head-dashboard-hirings');
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
Route::get('/detailed-project-reports', [TimeSheetController::class, 'detailed_project__report'])->name('location-head-detailed-project-report');
Route::get('/my-project-reports', [TimeSheetController::class, 'project_wise_my_report'])->name('location-head-project-wise-myreport');
Route::get('/monthly-project-reports', [TimeSheetController::class, 'monthly_wise_project_reports'])->name('location-head-monthly-wise-my-project-report');
});



// Route::group(['prefix' => 'super-admin', 'middleware' => [
//     'auth:sanctum', config('jetstream.auth_session'), 'verified',
//     'superAdmin'
// ], 'namespace' => 'Chennai'], function () {
//     Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('location-head-dashboard');
//     Route::get('/dashboard-controls',[DashboardControllsController::class, 'controls'])->name('location-head-dashboard-controls');
//     Route::get('/dashboard-skillings',[DashboardControllsController::class, 'skillings'])->name('location-head-dashboard-skillings');
//     Route::get('/dashboard-latest-project',[DashboardControllsController::class, 'latest_project'])->name('location-head-dashboard-latest-project');
//     Route::get('/dashboard-happenings',[DashboardControllsController::class, 'happenings'])->name('location-head-dashboard-happenings');
//     Route::get('/dashboard-hirings',[DashboardControllsController::class, 'hirings'])->name('location-head-dashboard-hirings');
//     Route::get('/add-employee', [EmployeeController::class, 'add_employee'])->name('location-head-add-employee');
//     Route::get('/all-employee', [EmployeeController::class, 'all_employee'])->name('location-head-all-employee');
//     Route::get('/activity', [ProjectController::class, 'add_activity'])->name('location-head-activity');
//     Route::get('/task', [ProjectController::class, 'add_task'])->name('location-head-task');
//     Route::get('/sub-task', [ProjectController::class, 'add_sub_task'])->name('location-head-sub-task');
//     Route::get('/project', [ProjectController::class, 'add_project'])->name('location-head-project');
//     Route::get('/project-assign', [ProjectController::class, 'project_assign'])->name('location-head-project-assign');
//     Route::get('/tree-structure', [ProjectController::class, 'project_tree_structure'])->name('location-head-tree-structure');
//     // Route::get('/timesheet', [TimeSheetController::class, 'timesheet'])->name('location-head-timesheet');
//     Route::get('/over-view', [TimeSheetController::class, 'over_view'])->name('location-head-over-view');
//     Route::get('/add-timesheet', [TimeSheetController::class, 'add_timesheet'])->name('location-head-add-timesheet');
//     Route::get('/aproved-timesheet', [TimeSheetController::class, 'aproved_timesheet'])->name('location-head-aproved-timesheet');
//     Route::get('/pending-timesheet', [TimeSheetController::class, 'pending_timesheet'])->name('location-head-pending-timesheet');
//     Route::get('/approval-timesheet', [TimeSheetController::class, 'approval_timesheet'])->name('location-head-approval-timesheet');
//     Route::get('/project-wise', [TimeSheetController::class, 'project_wise_report'])->name('location-head-project-wise-report');
//     Route::get('/detailed-project-reports', [TimeSheetController::class, 'detailed_project__report'])->name('location-head-detailed-project-report');
//     Route::get('/my-project-reports', [TimeSheetController::class, 'project_wise_my_report'])->name('location-head-project-wise-myreport');
//     Route::get('/monthly-project-reports', [TimeSheetController::class, 'monthly_wise_project_reports'])->name('location-head-monthly-wise-my-project-report');
// });

