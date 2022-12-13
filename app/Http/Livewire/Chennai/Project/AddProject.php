<?php

namespace App\Http\Livewire\Chennai\Project;
use App\Models\Employee;
use App\Models\Activity;
use App\Models\Project;
use App\Models\ActivityLink;
use Livewire\Component;

class AddProject extends Component
{
    public $activity,$name,$man_hours,$activity_mapping;

    public function add_project(){
        $project = new Project;
        $project->name = $this->name;
        $project->man_hour = $this->man_hours;
        $project->save();
        if($this->activity_mapping !=""){
            foreach($this->activity_mapping as $key => $Value){
                $activity_link = new ActivityLink;
                $activity_link->project_id = $project->id;
                $activity_link->activity_id = $this->activity_mapping[$key];
                $activity_link->save();
            }
        }
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function render()
    {
        $this->activity = Activity::all();
        return view('livewire.chennai.project.add-project',['activities' => $this->activity]);
    }
}
