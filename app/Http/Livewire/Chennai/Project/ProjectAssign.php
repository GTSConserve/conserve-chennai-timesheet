<?php

namespace App\Http\Livewire\Chennai\Project;
use App\Models\Employee;
use App\Models\Project;
use App\Models\ProjectManagerHeadLink;
use App\Models\ProjectManagerLink;
use App\Models\ProjectLeadLink;
use App\Models\TeamLeadLink;
use App\Models\EmployeeLink;
use Livewire\Component;
use Auth;

class ProjectAssign extends Component
{
    public $user_group_id;
    public $project_name,$project_manager_head= [],$project_manager= [],$project_lead= [],$team_lead= [],$employee= [];
    public $status;
    public function add(){
        // dd($this->project_manager_head);
       if($this->project_name !="")
       {
            if($this->project_manager_head !="")
            {

                foreach($this->project_manager_head as $key => $value)
                {
                    $pm_head = new ProjectManagerHeadLink;
                    $pm_head->project_id = $this->project_name;
                    $pm_head->user_id = $this->project_manager_head[$key];
                    $pm_head->assign_by  = Auth::user()->id;
                    $pm_head->save();
                }
            }
            if($this->project_manager !="")
            {
                foreach($this->project_manager as $key => $value)
                {
                    $pm = new ProjectManagerLink;
                    $pm->project_id = $this->project_name;
                    $pm->user_id = $this->project_manager[$key];
                    $pm->assign_by  = Auth::user()->id;
                    $pm->save();
                }
            }
            if($this->project_lead !="")
            {
                foreach($this->project_lead as $key => $value)
                {
                    $pl = new ProjectLeadLink;
                    $pl->project_id = $this->project_name;
                    $pl->user_id = $this->project_lead[$key];
                    $pl->assign_by  = Auth::user()->id;
                    $pl->save();
                }
            }
            if($this->team_lead !="")
            {
                foreach($this->team_lead as $key => $value)
                {
                    $tl = new TeamLeadLink;
                    $tl->project_id = $this->project_name;
                    $tl->user_id = $this->team_lead[$key];
                    $tl->assign_by  = Auth::user()->id;
                    $tl->save();
                }
            }
            if($this->employee !="")
            {
                foreach($this->employee as $key => $value)
                {
                    $emp = new EmployeeLink;
                    $emp->project_id = $this->project_name;
                    $emp->user_id = $this->employee[$key];
                    $emp->assign_by  = Auth::user()->id;
                    $emp->save();
                }
            }
            $this->reset();
            $this->emit('UpdateEmployee');
        }

    }
    public function render()
    {
        $this->user_group_id = Auth::user()->user_group_id;
        $pm_head = Employee::where('employee_access','5')->get();
        // dd($pm_head);
        $project_manager = Employee::where('employee_access','6')->get();
        $project_lead = Employee::where('employee_access','7')->get();
        $team_lead = Employee::where('employee_access','8')->get();
        $employee = Employee::where('employee_access','9')->get();
        $project = Project::all();
        return view('livewire.chennai.project.project-assign',['pm_heads'=> $pm_head,'project_managers'=> $project_manager, 'project_leads'=> $project_lead, 'team_leads'=> $team_lead , 'employees'=> $employee , 'projects' => $project]);
    }
}
