<?php

namespace App\Http\Controllers\Chennai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardControllsController extends Controller
{
    public function controls(){
        return view('chennai.dashboard-controls.controls');
    }
    public function skillings(){
        return view('chennai.dashboard-controls.skillings');
    }
    public function latest_project(){
        return view('chennai.dashboard-controls.latest-project');
    }
    public function happenings(){
        return view('chennai.dashboard-controls.happening');
    }
    public function hirings(){
        return view('chennai.dashboard-controls.hirings');
    }
}
