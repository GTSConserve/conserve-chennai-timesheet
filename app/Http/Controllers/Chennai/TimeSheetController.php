<?php

namespace App\Http\Controllers\Chennai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeSheetController extends Controller
{
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
}
