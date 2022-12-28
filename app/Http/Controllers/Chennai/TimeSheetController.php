<?php

namespace App\Http\Controllers\Chennai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeSheetController extends Controller
{
    public function timesheet(){
        return view('chennai.timesheet.timesheet');
    }
    public function over_view(){
        return view('chennai.timesheet.over-view');
    }
    public function add_timesheet(){
        return view('chennai.timesheet.add-timesheet');
    }
    public function aproved_timesheet(){
        return view('chennai.timesheet.approved-timesheet');
    }
    public function pending_timesheet(){
        return view('chennai.timesheet.pending-timesheet');
    }
    public function approval_timesheet(){
        return view('chennai.timesheet.approval-timesheet');
    }
    public function project_wise_report(){
        return view('chennai.timesheet.reports.project-wise');
    }
    public function project_wise_my_report(){
        return view('chennai.timesheet.my-reports.project-reports');
    }
    public function monthly_wise_project_reports(){
        return view('chennai.timesheet.over-view');
    }
}
