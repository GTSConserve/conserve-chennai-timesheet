<?php

namespace App\Http\Controllers\Chennai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add_activity(){
        return view('chennai.project.add-activity');
    }
    public function add_project(){
        return view('chennai.project.add-project');
    }
    public function project_tree_structure(){
        return view('chennai.project.project-tree-structure');
    }
    public function add_task(){
        return view('chennai.project.add-task');
    }
    public function add_sub_task(){
        return view('chennai.project.add-sub-task');
    }
    public function project_assign(){
        return view('chennai.project.project-assign');
    }
    public function timesheetadd(){
        return view('chennai.project.timesheet-add');
    }
    public function timesheetview(){
        return view('chennai.project.timesheet-view');
    }
        

}
