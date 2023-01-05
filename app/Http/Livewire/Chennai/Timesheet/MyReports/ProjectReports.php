<?php

namespace App\Http\Livewire\Chennai\Timesheet\MyReports;

use App\Models\Project;
use App\Models\Timesheet;
use App\Models\ProjectManagerHeadLink;
use App\Models\Activity;
use App\Models\ProjectManagerLink;
use App\Models\ProjectLeadLink;
use App\Models\TeamLeadLink;
use App\Models\EmployeeLink;

use Livewire\Component;
use Auth;
class ProjectReports extends Component
{
    public $status=0;
    public $project_id,$project_details,$timesheet_details,$emp_count,$view_approval,$billable_works_total,$non_billable_works_total;
    public $project_manager_head,$project_manager;
    public function search(){
        $this->status = 1;
        $auth = Auth::user()->id;
        $this->project_details = Project::where('id',$this->project_id)->first();
        $this->timesheets = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status','1'],['project_id',$this->project_id],['user_id',$auth]])->get();

        $billable_activity = Activity::where('status','1')->pluck('id');
        $this->billable_works_total = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id],['user_id',$auth]])->whereIn('activity_id',$billable_activity)->get();
        $billable_balance  = $this->billable_works_total->sum('approved_work_hours');
        // =====================================Non Billable=============================================
        $non_billable_activity = Activity::where('status','0')->pluck('id');
        $this->non_billable_works_total = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id],['user_id',$auth]])->whereIn('activity_id',$non_billable_activity)->get();
        $non_balance  = $this->non_billable_works_total->sum('approved_work_hours');
        $total_hours = $billable_balance + $non_balance;

        $this->dispatchBrowserEvent('my-reports', ['consumed' => $billable_balance,'balance' => $non_balance,'total'=> $total_hours]);
    }
    public function view($id){
        $this->status = 2;
        $this->view_approval =  Timesheet::with('project','activity','employee','user_group','sub_task','user')->where('id',$id)->first();

    }
    public function back(){
        $this->status = 1;

        $auth = Auth::user()->id;
        $this->project_details = Project::where('id',$this->project_id)->first();
        $this->timesheets = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status','1'],['project_id',$this->project_id],['user_id',$auth]])->get();

        $billable_activity = Activity::where('status','1')->pluck('id');
        $this->billable_works_total = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id],['user_id',$auth]])->whereIn('activity_id',$billable_activity)->get();
        $billable_balance  = $this->billable_works_total->sum('approved_work_hours');
        // =====================================Non Billable=============================================
        $non_billable_activity = Activity::where('status','0')->pluck('id');
        $this->non_billable_works_total = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id],['user_id',$auth]])->whereIn('activity_id',$non_billable_activity)->get();
        $non_balance  = $this->non_billable_works_total->sum('approved_work_hours');
        $total_hours = $billable_balance + $non_balance;

        $this->dispatchBrowserEvent('my-reports', ['consumed' => $billable_balance,'balance' => $non_balance,'total'=> $total_hours]);
    }
    public function render()
    {
        $user_id = Auth::user()->id;
        $project = Timesheet::with('project')->where('user_id',$user_id)->groupBy('project_id')->pluck('project_id');
        $projects = Project::whereIn('id',$project)->get();
        // dd($projects);
        // $projects = Timesheet::with('project')->where('user_id',$user_id)->pluck('project_id')->toArray();
        // $r=array_unique($projects);
        //  dd($r);
        return view('livewire.chennai.timesheet.my-reports.project-reports',['projects' => $projects]);
    }
}
