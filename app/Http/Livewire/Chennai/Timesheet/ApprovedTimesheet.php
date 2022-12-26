<?php

namespace App\Http\Livewire\Chennai\Timesheet;
use App\Models\Timesheet;
use App\Models\SubTask;
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
        $this->view_approval =  Timesheet::with('project','activity','employee','user_group','sub_task','user')->where('id',$id)->first();
        // dd($this->view_approval);
    }
    public function render()
    {
        $user_id = Auth::user()->id;
        $timesheet = Timesheet::with('project','activity','employee','user_group','user')->where([['timesheet_status',1],['user_id',$user_id]])->get();
        return view('livewire.chennai.timesheet.approved-timesheet',['timesheets' => $timesheet , 'views' => $this->view_approval]);
    }
}
