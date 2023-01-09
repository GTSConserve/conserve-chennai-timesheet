<?php

namespace App\Http\Livewire\Chennai\Controls;

use Livewire\Component;
use App\Models\WeekOff as WeekOffModel;

class WeekOff extends Component
{
    public $status=0;
    public $week_off_views;
    public $name,$week_off_type,$days;
    public $edit_name,$edit_week_off_type,$edit_days;
    public $update_id;
    public $search;
    public function save(){
        $this->validate([
            'name' => 'required',
            'days' => 'required',
            'week_off_type' => 'required',
        ]);
        $week_off = new WeekOffModel;
        $week_off->name = $this->name;
        $week_off->days = $this->days;
        $week_off->type = $this->week_off_type;
        $week_off->save();
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function edit($id){
        $this->status = 1;
        $edit =  WeekOffModel::where('id',$id)->first();
        $this->update_id            =  $edit->id;
        $this->edit_name            =  $edit->name;
        $this->edit_days            =  $edit->days;
        $this->edit_week_off_type   =  $edit->type;
    }
    public function back(){
        $this->status = 0;
    }
    public function update(){
        $this->validate([
            'edit_name' => 'required',
        ]);
        $update = WeekOffModel::where('id',$this->update_id)->first();
        $update->name = $this->edit_name;
        $update->days = $this->edit_days;
        $update->type = $this->edit_week_off_type;
        // dd($update);
        $update->save();
        $this->emit('UpdateEmployee');
        $this->status = 0;
    }
//     public function search(){
//         // dd($this->search);
//         $this->week_off_views = WeekOffModel::where('name', 'Like', '%' . $this->search . '%')->get();
// //

//     }
    public function render()
    {
        // if($this->search ==""){
            $this->week_off_views = WeekOffModel::all();
        // }
        return view('livewire.chennai.controls.week-off');
    }
}
