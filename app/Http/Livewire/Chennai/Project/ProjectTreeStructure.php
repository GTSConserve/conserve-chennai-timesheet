<?php

namespace App\Http\Livewire\Chennai\Project;

use App\Models\Project;
use App\Models\ProjectLeadLink;
use App\Models\TeamLeadLink;
use App\Models\EmployeeLink;
use App\Models\EmployeeTeamLeaderLink;
use Livewire\Component;
use App\Models\TeamLeadsProjectLeadsLink;
use Illuminate\Support\Facades\Auth;
use App\Models\ProjectManagerHeadLink;
use App\Models\ProjectManagerLink;

class ProjectTreeStructure extends Component
{
    private $projects;
    public $user_group_id;
    public $team_lead;
    public $project_id = null;
    private $project_leads_dropdown = null;
    private $team_leads_dropdown = null;
    private $team_lead_lists = null;
    private $employee_lists = null;
    public $selected_project_lead = null;
    public $selected_team_lead = null;
    private $tl_lists, $emp_lists;
    public $old_tl_ids, $old_emp_ids;
    public $assigned_tl_ids, $assigned_emp_ids;

    public function add_team_lead($id)
    {
        // dd('l');
        $pl_add = new TeamLeadsProjectLeadsLink;
        $pl_add->project_id = $this->project_id;
        $pl_add->reporting_pl_id = $this->selected_project_lead;
        $pl_add->tl_id    = $id;
        $pl_add->assign_by  = Auth::user()->id;
        $pl_add->save();
    }
    public function add_employee($id)
    {
        $pl_add = new EmployeeTeamLeaderLink;
        $pl_add->project_id = $this->project_id;
        $pl_add->reporting_tl_id = $this->selected_team_lead;
        $pl_add->emp_id    = $id;
        $pl_add->assign_by  = Auth::user()->id;
        $pl_add->save();
    }
    public function remove_team_lead($id)
    {
        $pl_remove = TeamLeadsProjectLeadsLink::where([['project_id', $this->project_id], ['tl_id', $id]])->delete();
        if (($key = array_search($id, $this->old_tl_ids)) !== false) {
            unset($this->old_tl_ids[$key]);
        }
    }
    public function remove_employee($id)
    {
        $pl_remove = EmployeeTeamLeaderLink::where([['project_id', $this->project_id], ['emp_id', $id]])->delete();
        if (($key = array_search($id, $this->old_emp_ids)) !== false) {
            unset($this->old_emp_ids[$key]);
        }
    }
    public function filter_project()
{
    if($this->user_group_id==2)
    {
        $this->projects = Project::all();
    }
    if($this->user_group_id==2)
    {
    $this->projects = Project::where('location_id',Auth::user()->location_id)->get();
    }
    if($this->user_group_id==5)
    {
        $hpm = ProjectManagerHeadLink::where('hpm_id',Auth::id())->pluck('project_id');
      //  dd($hpm);
    $this->projects = Project::whereIn('id',$hpm)->get();
    }
    if($this->user_group_id==6)
    {
        $pm = ProjectManagerLink::where('pm_id',Auth::id())->pluck('project_id');
      //  dd($hpm);
    $this->projects = Project::whereIn('id',$pm)->get();
    }
    if($this->user_group_id==7)
    {
        $pl = ProjectLeadLink::where('pl_id',Auth::id())->pluck('project_id');
      //  dd($hpm);
    $this->projects = Project::whereIn('id',$pl)->get();
    }
    if($this->user_group_id==8)
    {
        $tl = TeamLeadLink::where('tl_id',Auth::id())->pluck('project_id');
      //  dd($hpm);
    $this->projects = Project::whereIn('id',$tl)->get();
    }
}
    public function render()
    {
        $this->user_group_id = Auth::user()->user_group_id;

      
        $this->filter_project();
        if ($this->project_id) {
            $this->project_leads_dropdown = ProjectLeadLink::with('user')->where('project_id', $this->project_id)->get();
            $this->team_leads_dropdown = TeamLeadLink::with('user')->where('project_id', $this->project_id)->get();
            $this->team_lead_lists = TeamLeadLink::with('user')->where('project_id', $this->project_id)->get();
            $this->employee_lists = EmployeeLink::with('user')->where('project_id', $this->project_id)->get();
        }

        if ($this->selected_project_lead) {
            $this->tl_lists = TeamLeadsProjectLeadsLink::with('user')->where([['project_id', $this->project_id], ['reporting_pl_id', $this->selected_project_lead]])->get();
            for ($i = 0; $i < count($this->tl_lists); $i++) {
                $this->old_tl_ids[$i] = $this->tl_lists[$i]->user->id;
            }
            $assigned_tl = TeamLeadsProjectLeadsLink::with('user')->where('project_id', $this->project_id)->get();
            for ($i = 0; $i < count($assigned_tl); $i++) {
                $this->assigned_tl_ids[$i] = $assigned_tl[$i]->tl_id;
            }
        }
        if ($this->selected_team_lead) {
            $this->emp_lists = EmployeeTeamLeaderLink::with('user')->where([['project_id', $this->project_id], ['reporting_tl_id', $this->selected_team_lead]])->get();
            for ($i = 0; $i < count($this->emp_lists); $i++) {
                $this->old_emp_ids[$i] = $this->emp_lists[$i]->user->id;
            }
            $assigned_emp = EmployeeTeamLeaderLink::with('user')->where('project_id', $this->project_id)->get();
            for ($i = 0; $i < count($assigned_emp); $i++) {
                $this->assigned_emp_ids[$i] = $assigned_emp[$i]->emp_id;
            }
        }
        return view('livewire.chennai.project.project-tree-structure', ['projects' => $this->projects, 'project_leads_dropdown' => $this->project_leads_dropdown, 'team_leads_dropdown' => $this->team_leads_dropdown, 'team_lead_lists' => $this->team_lead_lists, 'employee_lists' => $this->employee_lists, 'tl_lists' => $this->tl_lists, 'emp_lists' => $this->emp_lists, 'old_tl_ids' => $this->old_tl_ids, 'old_emp_ids' => $this->old_emp_ids,'assigned_tl_ids' => $this->assigned_tl_ids, 'assigned_emp_ids' => $this->assigned_emp_ids,'user_group_id'=>$this->user_group_id]);
    }
}
