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
use Illuminate\Support\Facades\Auth;

class ProjectAssign extends Component
{
    public $user_group_id;

    public $selected_project_id;

    public $project_managers, $project_manager_heads;
    public $selected_project_manager, $selected_project_manager_head;

    public $project_leads, $team_leads, $employees;
    public $selected_project_lead, $selected_team_lead, $selected_employee;

    public $un_selected_project_lead, $un_selected_team_lead, $un_selected_employee;

    public $pl_lists, $tl_lists, $emp_lists;

    public $old_pl_ids,$old_tl_ids,$old_emp_ids;

    public $old_project_manager_head,$old_project_manager;


    public function save()
    {
        if($this->old_project_manager_head!=$this->selected_project_manager_head)
        {
        $hpm = ProjectManagerHeadLink::where([['project_id',$this->selected_project_id],['hpm_id',$this->old_project_manager_head]])->first();
        if($hpm)
        {
        $hpm->hpm_id=$this->selected_project_manager_head;
        $hpm->save();
        }
        else{
            $hpm = new ProjectManagerHeadLink;
            $hpm->project_id=$this->selected_project_id;
            $hpm->hpm_id=$this->selected_project_manager_head;
            $hpm->assign_by  = Auth::user()->id;
        $hpm->save();
        }
        }
        if($this->old_project_manager!=$this->selected_project_manager)
        {
        $pm = ProjectManagerLink::where([['project_id',$this->selected_project_id],['pm_id',$this->old_project_manager]])->first();
        if($pm)
        {
        $pm->pm_id=$this->selected_project_manager;
        $pm->save();
        }
        else{
            $pm = new ProjectManagerLink;
            $pm->project_id=$this->selected_project_id;
            $pm->pm_id=$this->selected_project_manager;
            $pm->assign_by  = Auth::user()->id;
            $pm->save();
        }
        }
        $this->emit('UpdateEmployee');
        $this->selected_project_id='';
    }
    public function add_project_lead($id)
    {
        $pl_add = new ProjectLeadLink;
        $pl_add->project_id = $this->selected_project_id;
        $pl_add->pl_id    = $id;
        $pl_add->assign_by  = Auth::user()->id;
        $pl_add->save();
    }
    public function unassign()
    {
        $hpm = ProjectManagerHeadLink::where('project_id', $this->selected_project_id)->delete();
        $pm = ProjectManagerLink::where('project_id', $this->selected_project_id)->delete();
        $pl_remove = ProjectLeadLink::where('project_id', $this->selected_project_id)->delete();
        $pl_remove = TeamLeadLink::where('project_id', $this->selected_project_id)->delete();
        $pl_remove = EmployeeLink::where('project_id', $this->selected_project_id)->delete();

        $this->emit('UpdateEmployee');
        $this->selected_project_id='';
        $this->selected_project_manager_head="";
        $this->selected_project_manager="";
    }
    public function add_team_lead($id)
    {
        $pl_add = new TeamLeadLink;
        $pl_add->project_id = $this->selected_project_id;
        $pl_add->tl_id    = $id;
        $pl_add->assign_by  = Auth::user()->id;
        $pl_add->save();
    }
    public function add_employee($id)
    {
        $pl_add = new EmployeeLink;
        $pl_add->project_id = $this->selected_project_id;
        $pl_add->emp_id    = $id;
        $pl_add->assign_by  = Auth::user()->id;
        $pl_add->save();
    }
    public function remove_project_lead($id)
    {
        $pl_remove = ProjectLeadLink::where([['project_id', $this->selected_project_id], ['pl_id', $id]])->delete();
        if (($key = array_search($id, $this->old_pl_ids)) !== false) {
            unset($this->old_pl_ids[$key]);
        }
    }
    public function remove_team_lead($id)
    {
        $pl_remove = TeamLeadLink::where([['project_id', $this->selected_project_id], ['tl_id', $id]])->delete();
        if (($key = array_search($id, $this->old_tl_ids)) !== false) {
            unset($this->old_tl_ids[$key]);
        }
    }
    public function remove_employee($id)
    {
        $pl_remove = EmployeeLink::where([['project_id', $this->selected_project_id], ['emp_id', $id]])->delete();
        if (($key = array_search($id, $this->old_emp_ids)) !== false) {
            unset($this->old_emp_ids[$key]);
        }
    }
    public function load()
    {
        $hpm = ProjectManagerHeadLink::where('project_id', $this->selected_project_id)->first();
        $pm = ProjectManagerLink::where('project_id', $this->selected_project_id)->first();
        if ($hpm) {
            $this->old_project_manager_head=$hpm->hpm_id;
            $this->selected_project_manager_head = $hpm->hpm_id;
        }
        if ($pm) {
            $this->old_project_manager=$pm->pm_id;
            $this->selected_project_manager = $pm->pm_id;
        }
        $this->pl_lists = ProjectLeadLink::where('project_id', $this->selected_project_id)->get();
        for ($i = 0; $i < count($this->pl_lists); $i++) {
            $this->old_pl_ids[$i] = $this->pl_lists[$i]->user->id;
        }
        $this->tl_lists = TeamLeadLink::where('project_id', $this->selected_project_id)->get();
        for ($i = 0; $i < count($this->tl_lists); $i++) {
            $this->old_tl_ids[$i] = $this->tl_lists[$i]->user->id;
        }
        $this->emp_lists = EmployeeLink::where('project_id', $this->selected_project_id)->get();
        for ($i = 0; $i < count($this->emp_lists); $i++) {
            $this->old_emp_ids[$i] = $this->emp_lists[$i]->user->id;
        }
    }

    public function render()
    {
        $this->user_group_id = Auth::user()->user_group_id;
        $this->projects = Project::all();
        if ($this->selected_project_id) {
            $this->project_manager_heads = Employee::where('employee_access', '5')->get();
            $this->project_managers = Employee::where('employee_access', '6')->get();
            $this->project_leads = Employee::where('employee_access', '7')->get();
            $this->team_leads = Employee::where('employee_access', '8')->get();
            $this->employees = Employee::where('employee_access', '9')->get();
            $this->load();
        }
        return view('livewire.chennai.project.project-assign', ['project_manager_heads' => $this->project_manager_heads, 'project_managers' => $this->project_managers, 'project_leads' => $this->project_leads, 'team_leads' => $this->team_leads, 'employees' => $this->employees, 'projects' => $this->projects, 'selected_project_id' => $this->selected_project_id, 'pl_lists' => $this->pl_lists, 'tl_lists' => $this->tl_lists, 'emp_lists' => $this->emp_lists, 'old_pl_ids' => $this->old_pl_ids,'old_tl_ids' => $this->old_tl_ids,'old_emp_ids' => $this->old_emp_ids]);
    }
}
