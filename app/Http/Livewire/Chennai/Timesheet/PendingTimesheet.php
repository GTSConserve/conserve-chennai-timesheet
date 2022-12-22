<?php

namespace App\Http\Livewire\Chennai\Timesheet;
use App\Models\Timesheet;
use App\Models\Activity;
use App\Models\Task;
use App\Models\SubTask;
use App\Models\SubTasks2;
use App\Models\Project;
use Livewire\Component;
use Auth;
class PendingTimesheet extends Component
{
    public $status=0;
    public $view_approval;
    public $edit_project_id, $edit_task_id, $edit_sub_task1_id, $edit_sub_task2_id, $edit_activity_id, $edit_description, $edit_work_hours;
    public $update_pending_id;
    public function back(){
        $this->status = 0;
    }
    public function view($id){
        $this->status = 1;
        $this->view_approval =  Timesheet::with('project','activity','employee','user_group')->where('id',$id)->first();
    }

    public function edit($id){
        $this->status = 2;
        $edit_pending =  Timesheet::where('id',$id)->first();
        $this->edit_project_id = $edit_pending->project_id;
        $this->edit_task_id    = $edit_pending->task_id;
        $this->edit_sub_task1_id = $edit_pending->sub_task1_id;
        // $this->edit_sub_task2_id = $edit_pending->sub_task2_id;
        $this->edit_activity_id = $edit_pending->activity_id;
        $this->edit_description = $edit_pending->description;
        $this->edit_work_hours = $edit_pending->work_hours;
        $this->update_pending_id = $edit_pending->id;
    }
    public function update_pending(){
        $update_pending =  Timesheet::where('id',$this->update_pending_id)->first();
        // $update_pending->project_id    = $this->edit_project_id;
        // $update_pending->task_id       = $this->edit_task_id;
        // $update_pending->sub_task1_id  = $this->edit_sub_task1_id;
        // $update_pending->sub_task2_id  = $this->edit_sub_task2_id;
        // $update_pending->activity_id   = $this->edit_activity_id;
        $update_pending->description   = $this->edit_description;
        $update_pending->work_hours    = $this->edit_work_hours;
        $update_pending->save();
        $this->emit('UpdateEmployee');
        $this->status = 0;
    }
    public function render()
    {
        $user_id = Auth::user()->id;
        $timesheet = Timesheet::with('project','activity','employee','user_group')->where([['timesheet_status',0],['user_id',$user_id]])->get();
        $projects=Project::all();
        $activities=Activity::all();
        $tasks=Task::all();
        $subtasks=SubTask::all();
        $subtasks2=SubTasks2::all();
        $edit_timesheets=Timesheet::all();
        return view('livewire.chennai.timesheet.pending-timesheet',['timesheets' => $timesheet,'views' => $this->view_approval ,'projects'=> $projects,'activities' =>$activities , 'tasks' => $tasks , 'subtasks' => $subtasks , 'subtasks2' => $subtasks2, 'edit_timesheets' =>$edit_timesheets]);
    }
}
