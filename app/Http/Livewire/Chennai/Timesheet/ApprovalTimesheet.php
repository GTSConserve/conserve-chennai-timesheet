<?php

namespace App\Http\Livewire\Chennai\Timesheet;
use App\Models\Timesheet;
use App\Models\Activity;
use App\Models\Project;
use Livewire\Component;
use Auth;
class ApprovalTimesheet extends Component
{
    public $status=0;
    public $view_approval;
    public $approved_work_hours = [];
    public $timesheet,$piechart_status=0;
    public $project_id;

    public function back(){
        $this->status = 0;
        if($this->project_id !=""){
            $this->piechart_status = '1';
            $this->timesheet = "";
            $this->timesheet = Timesheet::with('project','activity','employee','user_group')->where([['timesheet_status','0'],['project_id',$this->project_id]])->get();

            $total_hours =  Project::where('id',$this->project_id)->first();
            $consumed_billable_hours = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id],['activity_status','1']])->sum('approved_work_hours');
            $consumed_non_billable_hours = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id],['activity_status','0']])->sum('approved_work_hours');
            $balance_billable_hours = $total_hours->billable_man_hour - $consumed_billable_hours;
            $balance_non_billable_hours = $total_hours->non_billable_man_hour;

            $this->dispatchBrowserEvent('billable', ['consumed' => $balance_billable_hours,'balance' => $consumed_billable_hours,'total'=> $total_hours->billable_man_hour]);
            $this->dispatchBrowserEvent('non-billable', ['consumed' => $balance_non_billable_hours,'balance' => $consumed_non_billable_hours,'total'=> $total_hours->non_billable_man_hour]);
        }else{
            $this->piechart_status = '0';
        }
    }

    public function view($id){
        $this->status = 1;
        $this->view_approval = Timesheet::with('project','activity','employee','user_group')->where('id',$id)->first();
    }
    public function project_change(){
        if($this->project_id !=""){
            $this->piechart_status = '1';
            $this->timesheet = "";
            $this->timesheet = Timesheet::with('project','activity','employee','user_group')->where([['timesheet_status','0'],['project_id',$this->project_id]])->get();

            $total_hours =  Project::where('id',$this->project_id)->first();
            $consumed_billable_hours = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id],['activity_status','1']])->sum('approved_work_hours');
            $consumed_non_billable_hours = Timesheet::where([['timesheet_status','1'],['project_id',$this->project_id],['activity_status','0']])->sum('approved_work_hours');
            $balance_billable_hours = $total_hours->billable_man_hour - $consumed_billable_hours;
            $balance_non_billable_hours = $total_hours->non_billable_man_hour;

            $this->dispatchBrowserEvent('billable', ['consumed' => $balance_billable_hours,'balance' => $consumed_billable_hours,'total'=> $total_hours->billable_man_hour]);
            $this->dispatchBrowserEvent('non-billable', ['consumed' => $balance_non_billable_hours,'balance' => $consumed_non_billable_hours,'total'=> $total_hours->non_billable_man_hour]);
        }else{
            $this->piechart_status = '0';
        }

    }
    public function approve($id,$key){
        $approve = Timesheet::where('id',$id)->first();
        if(array_key_exists($key, $this->approved_work_hours)){
            if($this->approved_work_hours[$key] != ""){

                $approve->timesheet_status = '1';
                $approve->approved_by = Auth::user()->id;
                $approve->approved_work_hours = $this->approved_work_hours[$key];
                $approve->approved_date = date('Y-m-d');

                $approve->save();
                $this->reset();
            }
        }else{
            $this->emit('approved_hours',$key);
            // $this->dispatchBrowserEvent('approved_hours');
        }


    }
    public function render()
    {
        if($this->project_id ==""){
            $this->timesheet = Timesheet::with('project','activity','employee','user_group')->where('timesheet_status','0')->get();
        }

        $project_table = Timesheet::where('timesheet_status','0')->groupBy('project_id')->pluck('project_id');

        $project_name =  Project::whereIn('id',$project_table)->get();


        return view('livewire.chennai.timesheet.approval-timesheet',['timesheets' => $this->timesheet, 'views' => $this->view_approval, 'project_names'=>$project_name]);
    }
}
