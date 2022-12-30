<?php

namespace App\Http\Livewire\Chennai\DashboardControls;
use App\Models\DashboardLatestProject;
use Livewire\Component;

class LatestProject extends Component
{
    public $date, $title;
    public function save(){
        $skillings = new DashboardLatestProject;
        $skillings->title = $this->title;
        $skillings->date = $this->date;
        $skillings->save();
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function status($id){
        $latest_project_status = DashboardLatestProject::where('id',$id)->first();
        if($latest_project_status->status == 1){
            $latest_project_status->status = '0';
        }
        else{
            $latest_project_status->status = '1';
        }
        $latest_project_status->save();
    }
    public function delete($id){
        $latest_project_delete = DashboardLatestProject::where('id',$id)->delete();
    }
    public function render()
    {
        $latest_project = DashboardLatestProject::all();
        return view('livewire.chennai.dashboard-controls.latest-project',['latest_projects' => $latest_project]);
    }
}
