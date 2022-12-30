<?php

namespace App\Http\Livewire\Chennai\DashboardControls;
use App\Models\DashboardSkilling;
use Livewire\Component;

class Skillings extends Component
{
    public $date, $title;
    public function save(){
        $skillings = new DashboardSkilling;
        $skillings->title = $this->title;
        $skillings->date = $this->date;
        $skillings->save();
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function status($id){
        $skillings_status = DashboardSkilling::where('id',$id)->first();
        if($skillings_status->status == 1){
            $skillings_status->status = '0';
        }
        else{
            $skillings_status->status = '1';
        }
        $skillings_status->save();
    }
    public function delete($id){
        $skillings_delete = DashboardSkilling::where('id',$id)->delete();
    }
    public function render()
    {
        $skillings_lists = DashboardSkilling::all();
        return view('livewire.chennai.dashboard-controls.skillings',['skillings_lists'=> $skillings_lists]);
    }
}
