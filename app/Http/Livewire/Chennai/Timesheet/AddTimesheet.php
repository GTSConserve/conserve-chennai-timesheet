<?php

namespace App\Http\Livewire\Chennai\Timesheet;

use Livewire\Component;
use App\Models\Timesheet;
use App\Models\Activity;
use App\Models\Task;
use App\Models\TaskLink;
use App\Models\ActivityLink;
use App\Models\SubTask;
use App\Models\SubTasks2;
use App\Models\Project;
use Auth;
class AddTimesheet extends Component
{
    public $wrong_date=0;
    public $activity,$status,$view_projects;
    public $date,$project_id,$task_id,$sub_task1_id,$sub_task2_id,$activity_id,$description,$work_hours;
    public $tasks,$activities,$subtasks;
    public function onload(){
       $this->date = date('Y-m-d');
    }
    public function project_change($id){
       $this->tasks=TaskLink::with('task_link')->where('project_id',$id)->get();
       $this->activities=ActivityLink::with('activity')->where('project_id',$id)->get();
    }
    public function task_change($id){
        $this->subtasks = SubTask::where('task_id',$id)->get();
    }
    public function submit()
    {
        if(($this->date) <= date('Y-m-d')){
            $this->wrong_date = 0;
            $this->validate([
                'date' => 'required',
                'project_id' => 'required',
                'task_id' => 'required',
                'activity_id' => 'required',
                'work_hours' => 'required',
            ]);
            $addtimesheet=new Timesheet;
            $addtimesheet->user_group_id        = Auth::user()->user_group_id;
            $addtimesheet->user_id              = Auth::user()->id;
            $addtimesheet->date                 = $this->date;
            $addtimesheet->project_id           = $this->project_id;
            $addtimesheet->task_id              = $this->task_id;
            $addtimesheet->sub_task1_id         = $this->sub_task1_id;
            // $addtimesheet->sub_task2_id         = $this->sub_task2_id;
            $addtimesheet->activity_id          = $this->activity_id;
            $activity_status                    =  Activity::where('id',$this->activity_id)->first();
            $addtimesheet->activity_status      = $activity_status->status;
            $addtimesheet->description          = $this->description;
            $addtimesheet->work_hours           = $this->work_hours;
            $addtimesheet->timesheet_status     = "0";
            $addtimesheet->save();
            $this->reset();
            $this->emit('UpdateEmployee');
        }else{
            $this->date = "";
            $this->wrong_date = 1;
        }
        $this->date = date('Y-m-d');
    }
    public function render()
    {
        $projects=Project::all();
        $subtasks=SubTask::all();
        $subtasks2=SubTasks2::all();
        $timesheets=Timesheet::all();

        // Auth::user()->user_group_id
        return view('livewire.chennai.timesheet.add-timesheet',['projects'=>$projects,'timesheets'=>$timesheets]);
    }
}
