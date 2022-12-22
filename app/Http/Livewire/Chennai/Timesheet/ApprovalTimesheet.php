<?php

namespace App\Http\Livewire\Chennai\Timesheet;
use App\Models\Timesheet;
use Livewire\Component;

class ApprovalTimesheet extends Component
{
    public $status=0;
    public $view_approval;

    public function back(){
        $this->status = 0;
    }

    public function view($id){
        $this->status = 1;
        $this->view_approval =  Timesheet::with('project','activity','employee','user_group')->where('id',$id)->first();
        // dd($this->view_approval);
    }
    public function approve($id){
        $approve = Timesheet::where('id',$id)->first();
        $approve->timesheet_status = 1;
        $approve->save();
    }
    public function render()
    {
        $timesheet = Timesheet::with('project','activity','employee','user_group')->where('timesheet_status',0)->get();
        // dd($timesheet);
        return view('livewire.chennai.timesheet.approval-timesheet',['timesheets' => $timesheet, 'views' => $this->view_approval]);
    }
}
