<?php

namespace App\Http\Livewire\Chennai\Project;

use Livewire\Component;

class AddTask extends Component
{
    public $task_status1,$task_name;
    public function add_task(){
        dd("jdkkgusdghsdkgjhwrgmrwgerjg");
    }
    public function render()
    {
        return view('livewire.chennai.project.add-task');
    }
}
