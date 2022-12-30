<?php

namespace App\Http\Livewire\Chennai\Dashboard;
use App\Models\DashboardControl;
use App\Models\DashboardHappening;
use App\Models\DashboardHiring;
use App\Models\DashboardLatestProject;
use App\Models\DashboardSkilling;
use App\Models\Employee;
use Livewire\Component;
use Auth;
use Carbon\Carbon;
class Dashboard extends Component
{
    public $time_status;
    public $status=0;
    public $all_birthdays,$all_new_joiners;
    public function new_joiners(){
        $this->status= 1;
        $current_mounth = now()->format('m');
        $this->all_new_joiners = Employee::with('user_group')->whereMonth('doj',$current_mounth)->orderBy('doj','asc')->get();
    }
    public function all_birthday(){
        $this->status= 2;
        $startDate = Carbon::now()->startOfMonth();
        $endDate   = Carbon::now()->endOfMonth()->addMonth(1);
        $this->all_birthdays = Employee::whereBetween('dob_original', [$startDate, $endDate])->orderBy('dob_original','asc')->get();
    }
    public function back(){
        $this->status= 0;
    }
    public function render()
    {
        $mytime = Carbon::now('Asia/Kolkata');
        $str = $mytime->toTimeString();
        $time = strtotime($str);
        $current_time = date('H:i:s', $time);
        if($current_time > '12:00:00'){
           $this->time_status = 1;
        }else{
           $this->time_status = 2;
        }
        $current_mounth = now()->format('m');

        $currentDateTime = Carbon::now();

        $todayDate = Carbon::now()->format('Y-m-d');
        $newDate = Carbon::now()->addDays(15)->format('Y-m-d');

        $birthdays = Employee::with('user_group')->whereBetween('dob_original', [$todayDate, $newDate])->get();

        $new_joiners  = Employee::with('user_group')->whereMonth('doj',$current_mounth)->get();
        $controls = DashboardControl::all();
        $skillings = DashboardSkilling::all();
        $latest_projects = DashboardLatestProject::all();
        $happenings = DashboardHappening::all();
        $hirings = DashboardHiring::all();

        return view('livewire.chennai.dashboard.dashboard',['controls'=>$controls,'skillings'=>$skillings,'latest_projects'=>$latest_projects,'happenings'=>$happenings,'hirings'=>$hirings, 'new_joiners' => $new_joiners, 'birthdays'=>$birthdays]);
    }
}
