<?php

namespace App\Http\Livewire\Chennai\Project;

use App\Models\EmployeeLink;
use App\Models\Project;
use App\Models\ProjectLeadLink;
use App\Models\TeamLeadLink;
use Livewire\Component;

class ProjectTreeStructure extends Component
{
  public $project_id = null;
  public $heading = null;
  public $tree_type = null;
  public $selected_lead = null;
  private $leads;
  private $team_lead_lists = null;
  private $employee_lists = null;
  public function type($value)
  {
    $this->tree_type = $value;
  }
  public function render()
  {
    $project = Project::all();
    if ($this->project_id) {
      if ($this->tree_type == 1) {
        $this->leads = ProjectLeadLink::with('user')->where('project_id', $this->project_id)->get();
        $this->heading = 'Team';
        if($this->selected_lead)
        {
        $this->employee_lists = TeamLeadLink::with('user')->where('project_id', $this->project_id)->get();
        }
      } else {
        $this->leads = TeamLeadLink::with('user')->where('project_id', $this->project_id)->get();
        $this->heading = 'Employee';
        if($this->selected_lead)
        {
        $this->employee_lists = EmployeeLink::with('user')->where('project_id', $this->project_id)->get();
        }
      }
    }
    return view('livewire.chennai.project.project-tree-structure', ['projects' => $project,'leads' => $this->leads, 'tree_type' => $this->tree_type,'employee_lists' => $this->employee_lists]);
  }
}
