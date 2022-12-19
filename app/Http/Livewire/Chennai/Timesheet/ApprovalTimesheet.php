<?php

namespace App\Http\Livewire\Chennai\Timesheet;
use App\Models\Timesheet;
use Livewire\Component;

class ApprovalTimesheet extends Component
{
    public function render()
    {
        $timesheet = Timesheet::with('project','activity','employee')->get();
        // dd($timesheet);
        return view('livewire.chennai.timesheet.approval-timesheet',['timesheets' => $timesheet]);
    }
}
