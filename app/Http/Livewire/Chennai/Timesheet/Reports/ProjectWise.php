<?php

namespace App\Http\Livewire\Chennai\Timesheet\Reports;
use App\Models\Project;
use App\Models\Timesheet;
use App\Models\ProjectManagerHeadLink;
use App\Models\Activity;
use App\Models\ProjectManagerLink;
use App\Models\ProjectLeadLink;
use App\Models\TeamLeadLink;
use App\Models\EmployeeLink;
use Auth;
use Livewire\Component;

class ProjectWise extends Component
{
    public $status=0;
    public $auth_user_group;
    public $project_id,$project_details,$timesheet_details,$emp_count,$view_approval,$billable_works_total,$non_billable_works_total;
    public $project_manager_head,$project_manager;
    public $billable_hours = [];
    public $project_name = [];
    public $total_billable_hours;

    public $non_billable_hours = [];
    public $non_project_name = [];
    public $non_total_billable_hours;

    public function search(){

        if($this->project_id !="")
        {
            $this->status = 1;
            $this->auth_user_group = Auth::user()->user_group_id;
            $this->project_details = Project::where('id',$this->project_id)->first();
            $this->timesheets = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status','1'],['project_id',$this->project_id]])->get();

            $this->project_manager_heads = ProjectManagerHeadLink::with('user')->where('project_id',$this->project_id)->get();
            $this->project_managers = ProjectManagerLink::with('user')->where('project_id',$this->project_id)->get();
            $this->project_leads = ProjectLeadLink::with('user')->where('project_id',$this->project_id)->get();
            $this->team_leads = TeamLeadLink::with('user')->where('project_id',$this->project_id)->get();
            $this->employees = EmployeeLink::with('user')->where('project_id',$this->project_id)->get();
            $this->emp_count = $this->employees->count() + $this->team_leads->count()  + $this->project_leads->count()  + $this->project_managers->count()  + $this->project_manager_heads->count();

            $billable_activity = Activity::where('status','1')->pluck('id');
            $this->billable_works_total = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id]])->whereIn('activity_id',$billable_activity)->get();
            $consumed = $this->project_details->billable_man_hour - $this->billable_works_total->sum('approved_work_hours');
            $balance  = $this->billable_works_total->sum('approved_work_hours');
            $total    = $this->project_details->billable_man_hour;
            $this->dispatchBrowserEvent('billable', ['consumed' => $consumed,'balance' => $balance,'total'=> $total]);

            $non_billable_activity = Activity::where('status','0')->pluck('id');
            $this->non_billable_works_total = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id]])->whereIn('activity_id',$non_billable_activity)->get();
            $non_consumed = $this->project_details->non_billable_man_hour - $this->non_billable_works_total->sum('approved_work_hours');
            $non_balance  = $this->non_billable_works_total->sum('approved_work_hours');
            $non_total    = $this->project_details->non_billable_man_hour;
            $this->dispatchBrowserEvent('non-billable', ['consumed' => $non_consumed,'balance' => $non_balance,'total'=> $non_total]);

            $pluck_pid = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id]])->groupBy('activity_id')->pluck('activity_id');
            $pro = Activity::whereIn('id',$pluck_pid)->where('status','1')->get();
            $pro1 = Activity::whereIn('id',$pluck_pid)->where('status','0')->get();

            foreach($pro as $key=> $p)
            {
                $this->billable_hours[$key] = Timesheet::where([['project_id',$this->project_id],['timesheet_status','1'],['activity_id',$p->id]])->sum('approved_work_hours');
                $this->project_name[$key] = $p->name;
            }
            $this->total_billable_hours = array_sum($this->billable_hours);
            $this->dispatchBrowserEvent('activity_reports_billable', ['consumed' => $this->billable_hours,'balance' => $this->project_name,'total'=> $this->total_billable_hours]);

    //         $non_billable_hours = [];
    // public $non_project_name = [];
    // public $non_total_billable_hours;
            foreach($pro1 as $key=> $a)
            {
                $this->non_billable_hours[$key] = Timesheet::where([['project_id',$this->project_id],['timesheet_status','1'],['activity_id',$a->id]])->sum('approved_work_hours');
                $this->non_project_name[$key] = $a->name;
            }
            $this->non_total_billable_hours = array_sum($this->non_billable_hours);
            $this->dispatchBrowserEvent('activity_reports_non_billable', ['consumed' => $this->non_billable_hours,'balance' => $this->non_project_name,'total'=> $this->non_total_billable_hours]);
            $this->dispatchBrowserEvent('billable_taskchartContainer', ['consumed' => $this->non_billable_hours,'balance' => $this->non_project_name,'total'=> $this->non_total_billable_hours]);
            $this->dispatchBrowserEvent('non_billable_taskchartContainer', ['consumed' => $this->non_billable_hours,'balance' => $this->non_project_name,'total'=> $this->non_total_billable_hours]);
        }
    }
    public function view($id){
        $this->status = 2;
        $this->view_approval =  Timesheet::with('project','activity','employee','user_group','sub_task','user')->where('id',$id)->first();
    }
    public function back(){
        $this->status = 1;
        $this->project_manager_heads = ProjectManagerHeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_managers = ProjectManagerLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_leads = ProjectLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->team_leads = TeamLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->employees = EmployeeLink::with('user')->where('project_id',$this->project_id)->get();
        $this->emp_count = $this->employees->count() + $this->team_leads->count()  + $this->project_leads->count()  + $this->project_managers->count()  + $this->project_manager_heads->count();

        $billable_activity = Activity::where('status','1')->pluck('id');
        $this->billable_works_total = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id]])->whereIn('activity_id',$billable_activity)->get();
        $consumed = $this->project_details->billable_man_hour - $this->billable_works_total->sum('approved_work_hours');
        $balance  = $this->billable_works_total->sum('approved_work_hours');
        $total    = $this->project_details->billable_man_hour;
        $this->dispatchBrowserEvent('billable', ['consumed' => $consumed,'balance' => $balance,'total'=> $total]);

        $non_billable_activity = Activity::where('status','0')->pluck('id');
        $this->non_billable_works_total = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id]])->whereIn('activity_id',$non_billable_activity)->get();
        $non_consumed = $this->project_details->non_billable_man_hour - $this->non_billable_works_total->sum('approved_work_hours');
        $non_balance  = $this->non_billable_works_total->sum('approved_work_hours');
        $non_total    = $this->project_details->non_billable_man_hour;
        $this->dispatchBrowserEvent('non-billable', ['consumed' => $non_consumed,'balance' => $non_balance,'total'=> $non_total]);
    }
    public function pmh_remove($id){
        ProjectManagerHeadLink::where('id',$id)->delete();
        $this->emit('piechart');
        $this->timesheets = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status',1],['project_id',$this->project_id]])->get();
        $this->project_manager_heads = ProjectManagerHeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_managers = ProjectManagerLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_leads = ProjectLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->team_leads = TeamLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->employees = EmployeeLink::with('user')->where('project_id',$this->project_id)->get();
        $this->emp_count = $this->employees->count() + $this->team_leads->count()  + $this->project_leads->count()  + $this->project_managers->count()  + $this->project_manager_heads->count();
    }
    public function pm_remove($id){
        ProjectManagerLink::where('id',$id)->delete();
        $this->emit('piechart');
        $this->timesheets = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status',1],['project_id',$this->project_id]])->get();
        $this->project_manager_heads = ProjectManagerHeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_managers = ProjectManagerLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_leads = ProjectLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->team_leads = TeamLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->employees = EmployeeLink::with('user')->where('project_id',$this->project_id)->get();
        $this->emp_count = $this->employees->count() + $this->team_leads->count()  + $this->project_leads->count()  + $this->project_managers->count()  + $this->project_manager_heads->count();
    }
    public function pl_remove($id){
        ProjectLeadLink::where('id',$id)->delete();
        $this->emit('piechart');
        $this->timesheets = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status',1],['project_id',$this->project_id]])->get();
        $this->project_manager_heads = ProjectManagerHeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_managers = ProjectManagerLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_leads = ProjectLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->team_leads = TeamLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->employees = EmployeeLink::with('user')->where('project_id',$this->project_id)->get();
        $this->emp_count = $this->employees->count() + $this->team_leads->count()  + $this->project_leads->count()  + $this->project_managers->count()  + $this->project_manager_heads->count();
    }
    public function tl_remove($id){
        TeamLeadLink::where('id',$id)->delete();
        $this->emit('piechart');
        $this->timesheets = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status',1],['project_id',$this->project_id]])->get();
        $this->project_manager_heads = ProjectManagerHeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_managers = ProjectManagerLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_leads = ProjectLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->team_leads = TeamLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->employees = EmployeeLink::with('user')->where('project_id',$this->project_id)->get();
        $this->emp_count = $this->employees->count() + $this->team_leads->count()  + $this->project_leads->count()  + $this->project_managers->count()  + $this->project_manager_heads->count();
    }
    public function emp_remove($id){
        $this->emit('piechart');
        EmployeeLink::where('id',$id)->delete();
        $this->timesheets = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status',1],['project_id',$this->project_id]])->get();
        $this->project_manager_heads = ProjectManagerHeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_managers = ProjectManagerLink::with('user')->where('project_id',$this->project_id)->get();
        $this->project_leads = ProjectLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->team_leads = TeamLeadLink::with('user')->where('project_id',$this->project_id)->get();
        $this->employees = EmployeeLink::with('user')->where('project_id',$this->project_id)->get();
        $this->emp_count = $this->employees->count() + $this->team_leads->count()  + $this->project_leads->count()  + $this->project_managers->count()  + $this->project_manager_heads->count();
    }
    public function render()
    {
        $projects=Project::all();
        return view('livewire.chennai.timesheet.reports.project-wise',['projects' => $projects]);
    }
}
