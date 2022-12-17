<?php

namespace App\Http\Livewire\Chennai\Project;

use Livewire\Component;
use App\Models\Timesheet;
use App\Models\Activity;
use App\Models\Task;
use App\Models\SubTask;
use App\Models\Project;
class TimesheetAdd extends Component
{
    public $activity,$status,$view_projects;
    public $project_id,$activity_id,$task_id,$sub_task_id,$description,$start_time,$end_time;
    public function submit()
    {
$addtimesheet=new Timesheet;
$addtimesheet->project_id=$this->project_id;
$addtimesheet->activity_id=$this->activity_id;
$addtimesheet->task_id=$this->task_id;
$addtimesheet->sub_task_id=$this->sub_task_id;
$addtimesheet->description=$this->description;
$addtimesheet->start_time=$this->project_id;
$addtimesheet->end_time=$this->end_time;
$addtimesheet->save();
$this->emit('UpdateEmployee');
    }
    public function add(){
        $this->status= 1;
    }
    public function back(){
        $this->status= "";
    }
    public function render()
    {
        $projects=Project::all();
        $activities=Activity::all();
        $tasks=Task::all();
        $subtasks=SubTask::all();
        $timesheets=Timesheet::all();
        return view('livewire.chennai.project.timesheet-add',['projects'=>$projects,'activities'=>$activities,'tasks'=>$tasks,'subtasks'=>$subtasks,'timesheets'=>$timesheets]);
    }
}
