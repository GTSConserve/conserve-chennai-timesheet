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
use Illuminate\Support\Facades\Auth;
use App\Models\ProjectManagerHeadLink;
use App\Models\ProjectManagerLink;
use App\Models\ProjectLeadLink;
use App\Models\TeamLeadLink;
use App\Models\EmployeeLink;

class AddTimesheet extends Component
{
    public $user_group_id;
    private $projects;
    public $wrong_date=0;
    public $activity,$status,$view_projects;
    public $date,$project_id,$task_id,$sub_task1_id,$sub_task2_id,$activity_id,$description,$work_hours;
    public $tasks,$activities,$subtasks;
    public $sub__task = 0;
    public function onload(){
       $this->date = date('Y-m-d');
    }
    public function project_change($id){
       $this->tasks=TaskLink::with('task_link')->where('project_id',$id)->get();
       $this->activities=ActivityLink::with('activity')->where('project_id',$id)->get();
    }
    public function task_change($id){
        // dd($id);s
        $this->subtasks = SubTask::where('task_id',$id)->get();
        if($this->subtasks->count() > 0){
            $this->sub__task = 1;
        }
        else{
            $this->sub__task = 0;
        }
        // dd($this->subtasks);
        // if($this->subtasks != ){
        //     dd("sub task");
        // }
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
            ],
            [
                'date.required'=>trans('*mandatory'),
                'project_id.required'=>trans('*mandatory'),
                'task_id.required' => trans('*mandatory'),
                'activity_id.required' => trans('*mandatory'),
                'work_hours.required' => trans('*mandatory'),
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
        if($this->user_group_id==8)
        {
            $emp = EmployeeLink::where('emp_id',Auth::id())->pluck('project_id');
          //  dd($hpm);
        $this->projects = Project::whereIn('id',$emp)->get();
        }
    }
    public function render()
    {
       
        $this->user_group_id = Auth::user()->user_group_id;

        $this->filter_project();
  
        $subtasks=SubTask::all();
        $subtasks2=SubTasks2::all();
        $timesheets=Timesheet::all();

        // Auth::user()->user_group_id
        return view('livewire.chennai.timesheet.add-timesheet',['projects'=>$this->projects,'timesheets'=>$timesheets]);
    }
}
