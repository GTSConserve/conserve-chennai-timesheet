<?php

namespace App\Http\Controllers\Chennai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function add_employee(){
    dd("fdkjgn");
    return view('chennai.employee.add-employee');
  }
  public function all_employee(){
    return view('chennai.employee.all-employee');
  }
}
