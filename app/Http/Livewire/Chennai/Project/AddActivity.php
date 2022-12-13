<?php

namespace App\Http\Livewire\Chennai\Project;
use App\Models\Activity;
use Livewire\Component;

class AddActivity extends Component
{
    public $activity_status,$activity_name;
    public function add_activity(){
        $activity = new Activity;
        $activity->name   = $this->activity_name;
        $activity->status = $this->activity_status;
        $activity->save();
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function render()
    {
        return view('livewire.chennai.project.add-activity');
    }
}
