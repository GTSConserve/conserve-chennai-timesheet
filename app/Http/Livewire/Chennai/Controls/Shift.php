<?php

namespace App\Http\Livewire\Chennai\Controls;
use App\Models\Shift as ShiftModel;
use Livewire\Component;

class Shift extends Component
{
    public $shift,$start_time,$end_time;
    public $shift_view;
    public $status=0;
    public $update_id;
    public $edit_shift,$edit_start_time,$edit_end_time;

    public function save(){
        // dd("kjhj");
        $this->validate([
            'shift' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            ],
            [
            'start_time.required'=>trans('*mandatory'),
            'end_time.required' => trans('*mandatory'),
          ]);
            $shift = new ShiftModel;
            $shift->shift = $this->shift;
            $shift->start_time = $this->start_time;
            $shift->end_time = $this->end_time;
            $shift->save();
            $this->reset();
            $this->emit('UpdateEmployee');
    }
    public function edit($id){
        $this->update_id = $id;
        $this->status = 1;
        $shift_edit = ShiftModel::where('id',$id)->first();
        $this->edit_shift = $shift_edit->shift;
        $this->edit_start_time = $shift_edit->start_time;
        $this->edit_end_time = $shift_edit->end_time;
    }
    public function update(){
        $this->validate([
            'edit_shift' => 'required',
            'edit_start_time' => 'required',
            'edit_end_time' => 'required',
            ],
            [
            'edit_start_time.required'=>trans('*mandatory'),
            'edit_end_time.required' => trans('*mandatory'),
          ]);
        $shift_update = ShiftModel::where('id',$this->update_id)->first();
        $shift_update->shift =  $this->edit_shift;
        $shift_update->start_time =  $this->edit_start_time;
        $shift_update->end_time =  $this->edit_end_time;
        $shift_update->save();
        $this->emit('UpdateEmployee');
        $this->status = 0;
    }
    public function back(){
        $this->status = 0;
    }
    public function render()
    {
        $this->shift_view = ShiftModel::all();
        return view('livewire.chennai.controls.shift');
    }
}
