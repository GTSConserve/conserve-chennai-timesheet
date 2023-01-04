<?php

namespace App\Http\Livewire\Chennai\Timesheet\MyReports;

use App\Models\Timesheet;
use App\Models\Project;
use App\Models\Activity;
use Carbon\Carbon;
use Auth;

use Livewire\Component;


class MonthlyReports extends Component
{
    public $status=0,$piechart=1;
    public $month_number;
    public $billable_hours=[];
    public $non_billable_hours=[];
    public $project_name=[];
    public $total_billable_hours,$total_non_billable_hours;
    public $timesheet_details;
    public function onload(){

        $auth_user = Auth::user()->id;
        $current_mounth = now()->format('m');
        $this->month_number = $current_mounth;
        $pluck_pid = Timesheet::where([['user_id',$auth_user],['timesheet_status','1']])->pluck('project_id');

        $projects = Timesheet::where([['user_id',$auth_user],['timesheet_status','1']])->whereMonth('date', $current_mounth)->groupBy('project_id')->pluck('project_id');
        $pro = Project::whereIn('id',$projects)->get();

        $non_billable_activity = Activity::where('status','0')->pluck('id');
        $billable_activity = Activity::where('status','1')->pluck('id');

        foreach($pro as $key=> $p)
        {
            $this->billable_hours[$key] = Timesheet::whereIn('activity_id',$billable_activity)->where([['user_id',$auth_user],['project_id',$p->id],['timesheet_status','1']])->sum('approved_work_hours');
            $this->non_billable_hours[$key] = Timesheet::whereIn('activity_id',$non_billable_activity)->where([['user_id',$auth_user],['project_id',$p->id],['timesheet_status','1']])->sum('approved_work_hours');
            $this->project_name[$key] = $p->name;
        }
        $this->total_billable_hours = array_sum($this->billable_hours);
        $this->total_non_billable_hours = array_sum($this->non_billable_hours);

        $this->dispatchBrowserEvent('my_month_reports_billable', ['consumed' => $this->billable_hours,'balance' => $this->project_name,'total'=> $this->total_billable_hours]);
        $this->dispatchBrowserEvent('my_month_reports_non_billable', ['non_billable_consumed' => $this->non_billable_hours,'non_billable_project' => $this->project_name,'total_non_billable_hours'=> $this->total_non_billable_hours]);

        //table
        $this->timesheet_details = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status','1'],['user_id',$auth_user]])->whereMonth('date', $current_mounth)->get();
    }

    public function search(){
        $this->status = 1;
        $this->total_billable_hours  = "";
        $this->total_non_billable_hours = "";
        $this->billable_hours = [];
        $this->project_name = [];
        $this->non_billable_hours = [];
        $this->piechart = 1;
        $auth_user = Auth::user()->id;
        $search_mounth = $this->month_number;

        $pluck_pid = Timesheet::where([['user_id',$auth_user],['timesheet_status','1']])->pluck('project_id');

        $projects = Timesheet::where([['user_id',$auth_user],['timesheet_status','1']])->whereMonth('date', $search_mounth)->groupBy('project_id')->pluck('project_id');
        $pro = Project::whereIn('id',$projects)->get();

        $non_billable_activity = Activity::where('status','0')->pluck('id');
        $billable_activity = Activity::where('status','1')->pluck('id');

        foreach($pro as $key=> $p)
        {
            $this->billable_hours[$key] = Timesheet::whereIn('activity_id',$billable_activity)->where([['user_id',$auth_user],['project_id',$p->id],['timesheet_status','1']])->sum('approved_work_hours');
            $this->non_billable_hours[$key] = Timesheet::whereIn('activity_id',$non_billable_activity)->where([['user_id',$auth_user],['project_id',$p->id],['timesheet_status','1']])->sum('approved_work_hours');
            $this->project_name[$key] = $p->name;
        }
        $this->total_billable_hours = array_sum($this->billable_hours);
        $this->total_non_billable_hours = array_sum($this->non_billable_hours);

        $this->dispatchBrowserEvent('my_month_reports_billable', ['consumed' => $this->billable_hours,'balance' => $this->project_name,'total'=> $this->total_billable_hours]);
        $this->dispatchBrowserEvent('my_month_reports_non_billable', ['non_billable_consumed' => $this->non_billable_hours,'non_billable_project' => $this->project_name,'total_non_billable_hours'=> $this->total_non_billable_hours]);
        if($this->total_non_billable_hours == 0){
            $this->piechart = 0;
        }
        //table
        $this->timesheet_details = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status','1'],['user_id',$auth_user]])->whereMonth('date', $search_mounth)->get();
    }
    public function view($id){
        $this->status = 2;
        $this->view_approval =  Timesheet::with('project','activity','employee','user_group','sub_task','user')->where('id',$id)->first();
    }
    public function back(){
        $this->status = 1;

        $auth_user = Auth::user()->id;
        $search_mounth = $this->month_number;

        $pluck_pid = Timesheet::where([['user_id',$auth_user],['timesheet_status','1']])->pluck('project_id');

        $projects = Timesheet::where([['user_id',$auth_user],['timesheet_status','1']])->whereMonth('date', $search_mounth)->groupBy('project_id')->pluck('project_id');
        $pro = Project::whereIn('id',$projects)->get();

        $non_billable_activity = Activity::where('status','0')->pluck('id');
        $billable_activity = Activity::where('status','1')->pluck('id');

        foreach($pro as $key=> $p)
        {
            $this->billable_hours[$key] = Timesheet::whereIn('activity_id',$billable_activity)->where([['user_id',$auth_user],['project_id',$p->id],['timesheet_status','1']])->sum('approved_work_hours');
            $this->non_billable_hours[$key] = Timesheet::whereIn('activity_id',$non_billable_activity)->where([['user_id',$auth_user],['project_id',$p->id],['timesheet_status','1']])->sum('approved_work_hours');
            $this->project_name[$key] = $p->name;
        }
        $this->total_billable_hours = array_sum($this->billable_hours);
        $this->total_non_billable_hours = array_sum($this->non_billable_hours);

        $this->dispatchBrowserEvent('my_month_reports_billable', ['consumed' => $this->billable_hours,'balance' => $this->project_name,'total'=> $this->total_billable_hours]);
        $this->dispatchBrowserEvent('my_month_reports_non_billable', ['non_billable_consumed' => $this->non_billable_hours,'non_billable_project' => $this->project_name,'total_non_billable_hours'=> $this->total_non_billable_hours]);
        if($this->total_non_billable_hours == 0){
            $this->piechart = 0;
        }
    }
    public function render()
    {
        return view('livewire.chennai.timesheet.my-reports.monthly-reports');
    }
}
