<?php

namespace App\Http\Livewire\Chennai\Project;
use App\Models\Employee;
use App\Models\Activity;
use App\Models\Project;
use App\Models\Task;
use App\Models\ActivityLink;
use App\Models\TaskLink;
use Livewire\Component;

class AddProject extends Component
{
    public $activity,$status,$view_projects;
    public $name,$billable_man_hours,$non_billable_man_hours,$activity_mapping, $task_mapping;
    public $update_name,$update_billable_man_hours,$update_non_billable_man_hours,$update_activity_mapping,$update_task_mapping;
    public $update_project_id;
    public function add(){
        $this->status= 1;
    }
    public function back(){
        $this->status= "";
    }
    public function add_project(){
        $project = new Project;
        $project->name = $this->name;
        $project->billable_man_hour     = $this->billable_man_hours;
        $project->non_billable_man_hour = $this->non_billable_man_hours;
        $project->save();
        if($this->activity_mapping !=""){
            foreach($this->activity_mapping as $key => $value){
                $activity_link = new ActivityLink;
                $activity_link->project_id = $project->id;
                $activity_link->activity_id = $this->activity_mapping[$key];
                $activity_link->save();
            }
        }
        if($this->task_mapping !=""){
            foreach($this->task_mapping as $key => $value){
                $task_link = new TaskLink;
                $task_link->project_id = $project->id;
                $task_link->task_id = $this->task_mapping[$key];
                $task_link->save();
            }
        }
        $this->reset();
        $this->emit('UpdateEmployee');
        $this->status= "";
    }
    public function edit_project($project_id){
        $this->status= 2;
        $this->update_project_id = $project_id;
        $edit_projects = Project::with('mapping_view','task_mapping')->where('id',$project_id)->first();
        $this->update_name   = $edit_projects->name;
        $this->update_billable_man_hours  = $edit_projects->billable_man_hour;
        $this->update_non_billable_man_hours  = $edit_projects->non_billable_man_hour;
        if($edit_projects->mapping_view->count() == 0){
            $this->update_activity_mapping = null;
        }else{
            foreach($edit_projects->mapping_view as $key => $value){
                $this->update_activity_mapping[$key] = $value->activity_id;
            }
        }
        if($edit_projects->task_mapping->count() == 0){
            $this->update_task_mapping = null;
        }else{
            foreach($edit_projects->task_mapping as $key => $value){
                $this->update_task_mapping[$key] = $value->task_id;
            }
        }
    }
    public function update_project(){
        $update_projects = Project::where('id',$this->update_project_id)->first();
        $update_projects->name = $this->update_name;
        $update_projects->billable_man_hour = $this->update_billable_man_hours;
        $update_projects->non_billable_man_hour = $this->update_non_billable_man_hours;
        $update_projects->save();

        $update_activity_link = ActivityLink::where('project_id',$this->update_project_id)->get();
        if($update_activity_link !=""){
            ActivityLink::where('project_id',$this->update_project_id)->delete();
        }
        if($this->update_activity_mapping !="")
        {
            foreach($this->update_activity_mapping as $key => $value){
                $update_activity_link = new ActivityLink;
                $update_activity_link->project_id = $this->update_project_id;
                $update_activity_link->activity_id = $this->update_activity_mapping[$key];
                $update_activity_link->save();
            }
        }
        $up_task_link = TaskLink::where('project_id',$this->update_project_id)->get();
        if($up_task_link !=""){
            TaskLink::where('project_id',$this->update_project_id)->delete();
        }
        if($this->update_task_mapping !="")
        {
            foreach($this->update_task_mapping as $key => $value){
                $update_task_link = new TaskLink;
                $update_task_link->project_id = $this->update_project_id;
                $update_task_link->task_id = $this->update_task_mapping[$key];
                $update_task_link->save();
            }
        }
        $this->emit('UpdateEmployee');
        $this->status= "";
    }
    public function render()
    {
        $this->view_projects = Project::with('mapping_view','task_mapping')->get();
        // foreach($this->view_projects as $key => $value){

        //    $view = ActivityLink::where
        // }
        // dd($this->view_projects);
        $this->activity = Activity::all();
        $task = Task::all();
        return view('livewire.chennai.project.add-project',['view_projects' => $this->view_projects,'activities' => $this->activity , 'tasks' => $task ]);
    }
}
