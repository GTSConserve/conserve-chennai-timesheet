<?php

namespace App\Http\Livewire\Chennai\Timesheet;
use App\Models\Timesheet;
use Livewire\Component;
use Auth;
class ApprovedTimesheet extends Component
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
    public function render()
    {
        $user_id = Auth::user()->id;
        $timesheet = Timesheet::with('project','activity','employee','user_group')->where([['timesheet_status',1],['user_id',$user_id]])->get();
        return view('livewire.chennai.timesheet.approved-timesheet',['timesheets' => $timesheet , 'views' => $this->view_approval]);
    }
}
