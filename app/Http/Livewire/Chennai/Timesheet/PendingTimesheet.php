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

    public function back(){
        $this->status = 0;
    }
    public function view($id){
        $this->status = 1;
        $this->view_approval =  Timesheet::with('project','activity','employee','user_group')->where('id',$id)->first();
    }
    public function edit($id){
        $this->status = 2;

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
        $timesheets=Timesheet::all();
        return view('livewire.chennai.timesheet.pending-timesheet',['timesheets' => $timesheet,'views' => $this->view_approval ,'projects'=> $projects,'activities' =>$activities , 'tasks' => $tasks , 'subtasks' => $subtasks , ]);
    }
}
