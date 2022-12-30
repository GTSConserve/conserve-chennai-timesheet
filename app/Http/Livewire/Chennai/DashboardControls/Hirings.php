<?php

namespace App\Http\Livewire\Chennai\DashboardControls;
use App\Models\DashboardHiring;
use Livewire\Component;

class Hirings extends Component
{
    public $date, $title;
    public function save(){
        $skillings = new DashboardHiring;
        $skillings->title = $this->title;
        $skillings->date = $this->date;
        $skillings->save();
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function status($id){
        $latest_project_status = DashboardHiring::where('id',$id)->first();
        if($latest_project_status->status == 1){
            $latest_project_status->status = '0';
        }
        else{
            $latest_project_status->status = '1';
        }
        $latest_project_status->save();
    }
    public function delete($id){
        $latest_project_delete = DashboardHiring::where('id',$id)->delete();
    }
    public function render()
    {
        $hiring = DashboardHiring::all();
        return view('livewire.chennai.dashboard-controls.hirings',['hirings'=>$hiring]);
    }
}
