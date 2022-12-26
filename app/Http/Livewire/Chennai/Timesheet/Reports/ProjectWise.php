<?php

namespace App\Http\Livewire\Chennai\Timesheet\Reports;
use App\Models\Project;
use App\Models\Timesheet;
use App\Models\ProjectManagerHeadLink;
use App\Models\ProjectManagerLink;
use App\Models\ProjectLeadLink;
use App\Models\TeamLeadLink;
use App\Models\EmployeeLink;
use Livewire\Component;

class ProjectWise extends Component
{
    public $status=0;
    public $project_id,$project_details,$timesheet_details,$emp_count;
    public $project_manager_head,$project_manager;
    public function search(){
       $this->emit('piechart');
       $this->status = 1;
       $this->project_details = Project::where('id',$this->project_id)->first();
       $this->timesheets = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status',1],['project_id',$this->project_id]])->get();
       $this->project_manager_heads = ProjectManagerHeadLink::with('user')->where('project_id',$this->project_id)->get();
       $this->project_managers = ProjectManagerLink::with('user')->where('project_id',$this->project_id)->get();
       $this->project_leads = ProjectLeadLink::with('user')->where('project_id',$this->project_id)->get();
       $this->team_leads = TeamLeadLink::with('user')->where('project_id',$this->project_id)->get();
       $this->employees = EmployeeLink::with('user')->where('project_id',$this->project_id)->get();
       $this->emp_count = $this->employees->count() + $this->team_leads->count()  + $this->project_leads->count()  + $this->project_managers->count()  + $this->project_manager_heads->count();
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
