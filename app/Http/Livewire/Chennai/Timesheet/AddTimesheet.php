<?php

namespace App\Http\Livewire\Chennai\Timesheet;

use Livewire\Component;
use App\Models\Timesheet;
use App\Models\Activity;
use App\Models\Task;
use App\Models\SubTask;
use App\Models\SubTasks2;
use App\Models\Project;
use Auth;
class AddTimesheet extends Component
{
    public $activity,$status,$view_projects;
    public $project_id,$task_id,$sub_task1_id,$sub_task2_id,$activity_id,$description,$work_hours;
    public function submit()
    {
    $addtimesheet=new Timesheet;
    $addtimesheet->user_group_id        = Auth::user()->user_group_id;
    $addtimesheet->user_id              = Auth::user()->id;
    $addtimesheet->project_id           = $this->project_id;
    $addtimesheet->task_id              = $this->task_id;
    $addtimesheet->sub_task1_id         = $this->sub_task1_id;
    $addtimesheet->sub_task2_id         = $this->sub_task2_id;
    $addtimesheet->activity_id          = $this->activity_id;
    $addtimesheet->description          = $this->description;
    $addtimesheet->work_hours           = $this->work_hours;
    $addtimesheet->timesheet_status     = "0";
    $addtimesheet->save();
    $this->reset();
    $this->emit('UpdateEmployee');
    }
    public function render()
    {
        $projects=Project::all();
        $activities=Activity::all();
        $tasks=Task::all();
        $subtasks=SubTask::all();
        $subtasks2=SubTasks2::all();
        $timesheets=Timesheet::all();
        // Auth::user()->user_group_id
        return view('livewire.chennai.timesheet.add-timesheet',['projects'=>$projects,'activities'=>$activities,'tasks'=>$tasks,'subtasks'=>$subtasks,'subtasks2'=>$subtasks2,'timesheets'=>$timesheets]);
    }
}
