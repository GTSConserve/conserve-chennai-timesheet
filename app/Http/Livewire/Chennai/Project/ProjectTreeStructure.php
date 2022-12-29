<?php

namespace App\Http\Livewire\Chennai\Project;

use App\Models\Project;
use App\Models\ProjectLeadLink;
use App\Models\TeamLeadLink;
use App\Models\EmployeeLink;
use Livewire\Component;

class ProjectTreeStructure extends Component
{

  public $project_id=null;
  private $project_leads_dropdown=null;
  private $team_leads_dropdown=null;
  private $team_lead_lists=null;
  private $employee_lists=null;
  public $selected_project_lead=null;
  public $selected_team_lead=null;


  public function render()
  {
    $project = Project::all();
   if($this->project_id){
    $this->project_leads_dropdown = ProjectLeadLink::with('user')->where('project_id', $this->project_id)->get();
      $this->team_leads_dropdown = TeamLeadLink::with('user')->where('project_id', $this->project_id)->get();
   
     
      $this->team_lead_lists = TeamLeadLink::with('user')->where('project_id', $this->project_id)->get();
      $this->employee_lists = EmployeeLink::with('user')->where('project_id', $this->project_id)->get();
   }
    return view('livewire.chennai.project.project-tree-structure', ['projects' => $project,'project_leads_dropdown' => $this->project_leads_dropdown, 'team_leads_dropdown' => $this->team_leads_dropdown,'team_lead_lists'=>$this->team_lead_lists,'employee_lists'=>$this->employee_lists]);
  }
}
