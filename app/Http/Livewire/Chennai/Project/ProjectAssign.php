<?php

namespace App\Http\Livewire\Chennai\Project;
use App\Models\Employee;
use App\Models\Project;
use App\Models\ProjectManagerHead;
use Livewire\Component;
use Auth;

class ProjectAssign extends Component
{
    public $user_group_id;
    public $project_name,$project_manager_head = [],$project_manager= [],$project_lead= [],$team_lead= [],$employee= [];
    public $status;
    public function add(){
       if($this->project_name !="")
       {
            if($this->project_manager_head !="")
            {
                foreach($this->project_manager_head as $key => $value)
                {
                    // dd($this->project_name);
                    $pm_head = new ProjectManagerHead;
                    $pm_head->project_id = $this->project_name;
                    $pm_head->user_group_id = $this->project_manager_head[$key];
                    $pm_head->save();
                }
            }
            if($this->project_manager !="")
            {

            }
            if($this->project_lead !="")
            {

            }
            if($this->team_lead !="")
            {

            }
            if($this->employee !="")
            {

            }
        }
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function render()
    {
        $this->user_group_id = Auth::user()->user_group_id;
        $pm_head = Employee::where('designation','6')->get();
        $project_manager = Employee::where('designation','6')->get();
        $project_lead = Employee::where('designation','6')->get();
        $team_lead = Employee::where('designation','6')->get();
        $employee = Employee::where('designation','6')->get();
        $project = Project::all();
        return view('livewire.chennai.project.project-assign',['pm_heads'=> $pm_head,'project_managers'=> $project_manager, 'project_leads'=> $project_lead, 'team_leads'=> $team_lead , 'employees'=> $employee , 'projects' => $project]);
    }
}
