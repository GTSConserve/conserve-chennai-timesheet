<?php

namespace App\Http\Livewire\Chennai\DashboardControls;
use App\Models\DashboardHappening;
use Livewire\Component;

class Happening extends Component
{
    public $date, $title;
    public function save(){
        $this->validate([
            'title' => 'required',
            'date' => 'required',
        ]);
        $skillings = new DashboardHappening;
        $skillings->title = $this->title;
        $skillings->date = $this->date;
        $skillings->save();
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function status($id){
        $latest_project_status = DashboardHappening::where('id',$id)->first();
        if($latest_project_status->status == 1){
            $latest_project_status->status = '0';
        }
        else{
            $latest_project_status->status = '1';
        }
        $latest_project_status->save();
    }
    public function delete($id){
        $latest_project_delete = DashboardHappening::where('id',$id)->delete();
    }
    public function render()
    {
        $happening = DashboardHappening::all();
        return view('livewire.chennai.dashboard-controls.happening',['heappnings'=> $happening]);
    }
}
