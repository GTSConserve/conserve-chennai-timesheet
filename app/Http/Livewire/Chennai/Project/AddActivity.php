<?php

namespace App\Http\Livewire\Chennai\Project;
use App\Models\Activity;
use Livewire\Component;

class AddActivity extends Component
{
    public $status;
    public $activity_status,$activity_name;
    public $update_activity_name,$update_activity_status;
    public $update_id;

    public function add(){
        $this->status = 1;
    }
    public function back(){
        $this->status = "";
    }
    public function add_activity(){
        $this->validate([
            'activity_name' => 'required',
            'activity_status' => 'required',
        ]);
        $activity = new Activity;
        $activity->name   = $this->activity_name;
        $activity->status = $this->activity_status;
        $activity->save();
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function edit($id){

        $this->update_id = $id;
        $this->status = 2;
        $edit_activity = Activity::where('id',$this->update_id)->first();
        $this->update_activity_name = $edit_activity->name;
        $this->update_activity_status = $edit_activity->status;
    }
    public function update(){
        $update_activity = Activity::where('id',$this->update_id)->first();
        $update_activity->name = $this->update_activity_name;
        $update_activity->status = $this->update_activity_status;
        $update_activity->save();
        $this->emit('UpdateEmployee');
        $this->status = "";
    }
    public function delete($id){
        $this->emit('Delete');
    }
    public function render()
    {
       $activities = Activity::all();
        return view('livewire.chennai.project.add-activity',['activities'=> $activities]);
    }
}
