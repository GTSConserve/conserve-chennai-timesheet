<?php

namespace App\Http\Livewire\Chennai\DashboardControls;
use App\Models\DashboardControl;
use Livewire\Component;

class Controls extends Component
{
    public $announcement, $engineering_quote, $ethics_quote;
    public function onload(){
        $control_view = DashboardControl::first();
        if($control_view != ""){
            $this->announcement      = $control_view->announcement;
            $this->engineering_quote = $control_view->engineering_quote;
            $this->ethics_quote      = $control_view->ethics_quote;
        }
    }
    public function save(){
        $controll = DashboardControl::first();
        if($controll == ""){
            $controll = new DashboardControl;
        }
        $controll->announcement      = $this->announcement;
        $controll->engineering_quote = $this->engineering_quote;
        $controll->ethics_quote      = $this->ethics_quote;
        $controll->save();
        $this->emit('UpdateEmployee');
    }
    public function render()
    {
        return view('livewire.chennai.dashboard-controls.controls');
    }
}
