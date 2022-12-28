<?php

namespace App\Http\Livewire\Chennai\Timesheet;
use App\Models\Timesheet;
use App\Models\Project;
use App\Models\Activity;
use Livewire\Component;
use Carbon\Carbon;
use Auth;
class OverView extends Component
{
    public $billable_hours=[];
    public $non_billable_hours=[];
    public $project_name=[];
    public $total_billable_hours,$total_non_billable_hours;
    public function onload(){
        //
        $auth_user = Auth::user()->id;
        $current_mounth = now()->format('m');
        $pluck_pid = Timesheet::where('user_id',$auth_user)->pluck('project_id');

        $projects = Timesheet::where('user_id',$auth_user)->whereMonth('date', $current_mounth)->groupBy('project_id')->pluck('project_id');
        $pro = Project::whereIn('id',$projects)->get();

        $non_billable_activity = Activity::where('status','0')->pluck('id');
        $billable_activity = Activity::where('status','1')->pluck('id');

        foreach($pro as $key=> $p)
        {
            $this->billable_hours[$key] = Timesheet::whereIn('activity_id',$billable_activity)->where([['user_id',$auth_user],['project_id',$p->id]])->sum('approved_work_hours');
            $this->non_billable_hours[$key] = Timesheet::whereIn('activity_id',$non_billable_activity)->where([['user_id',$auth_user],['project_id',$p->id]])->sum('approved_work_hours');
            $this->project_name[$key] = $p->name;
        }
        $this->total_billable_hours = array_sum($this->billable_hours);
        $this->total_non_billable_hours = array_sum($this->non_billable_hours);
        // dd($this->total_non_billable_hours);

        $this->dispatchBrowserEvent('my_month_reports_billable', ['consumed' => $this->billable_hours,'balance' => $this->project_name,'total'=> $this->total_billable_hours]);
        $this->dispatchBrowserEvent('my_month_reports_non_billable', ['non_billable_consumed' => $this->non_billable_hours,'non_billable_project' => $this->project_name,'total_non_billable_hours'=> $this->total_non_billable_hours]);
    }
    public function render()
    {
        // $projects = Timesheet::with('project')->where('user_id',$auth_user)->whereMonth('date', $current_mounth)->get()->groupBy('project_id');
        // dd($projects->project_id);
        return view('livewire.chennai.timesheet.over-view');
    }
}
