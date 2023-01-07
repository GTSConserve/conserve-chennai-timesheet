<?php

namespace App\Http\Controllers\Chennai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControlsController extends Controller
{
   public function shift(){
      return view('chennai.controls.shift');
   }
   public function holiday(){
        return view('chennai.controls.holiday');
   }
   public function attendance_status(){
    return view('chennai.controls.attendance-status');
}
}
