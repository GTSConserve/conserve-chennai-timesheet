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
    public function add_task(){
        return view('chennai.project.add-task');
    }
}
