<?php

namespace App\Http\Livewire\Chennai\Timesheet;
use App\Models\Timesheet;
use Livewire\Component;
use Auth;
class ApprovalTimesheet extends Component
{
    public $status=0;
    public $view_approval;
    public $approved_work_hours = [];

    public function back(){
        $this->status = 0;
    }

    public function view($id){
        $this->status = 1;
        $this->view_approval = Timesheet::with('project','activity','employee','user_group')->where('id',$id)->first();
        // dd($this->view_approval);
    }
    public function approve($id,$key){
        $approve = Timesheet::where('id',$id)->first();

        if($this->approved_work_hours[$key] != ""){
            // dd($this->approved_work_hours[$key]);
            // if($this->approved_work_hours[$key] == ""){
            //     $approve->approved_work_hours = $approve->work_hours;
            //     dd($approve->approved_work_hours);
            // }else{
            //     $approve->approved_work_hours = $this->approved_work_hours[$key];
            //     dd($approve->approved_work_hours);
            // }
            $approve->timesheet_status = '1';
            $approve->approved_by = Auth::user()->id;
            $approve->approved_work_hours = $this->approved_work_hours[$key];
            $approve->approved_date = date('Y-m-d');
            // dd($approve);
            $approve->save();
        }
        $this->reset();

    }
    public function render()
    {
        $timesheet = Timesheet::with('project','activity','employee','user_group')->where('timesheet_status','0')->get();
        // foreach ($timesheet as $key => $value){
        //     $this->approved_work_hours[$key] = $value->work_hours;
        // }
        return view('livewire.chennai.timesheet.approval-timesheet',['timesheets' => $timesheet, 'views' => $this->view_approval]);
    }
}
