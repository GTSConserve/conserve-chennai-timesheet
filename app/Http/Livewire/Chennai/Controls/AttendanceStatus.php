<?php

namespace App\Http\Livewire\Chennai\Controls;
use App\Models\AttendanceStatus as AttendanceModel;
use Livewire\Component;

class AttendanceStatus extends Component
{
    public $status=0;
    public $update_id;
    public $name,$short_name;
    public $edit_name,$edit_short_name;
    public $view_attendance;
    public function save(){
        $this->validate([
            'name' => 'required',
            'short_name' => 'required',
        ]);
        $attendance = new AttendanceModel;
        $attendance->name = $this->name;
        $attendance->short_name = $this->short_name;
        $attendance->save();
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function edit($id){
        $this->update_id = $id;
        $this->status = 1;
        $attendance_edit = AttendanceModel::where('id',$id)->first();
        $this->edit_name = $attendance_edit->name;
        $this->edit_short_name = $attendance_edit->short_name;
    }
    public function update(){
        $this->validate([
            'edit_name' => 'required',
            'edit_short_name' => 'required',
        ]);
        $update_attendance = AttendanceModel::where('id',$this->update_id)->first();
        $update_attendance->name = $this->edit_name;
        $update_attendance->short_name = $this->edit_short_name;
        $update_attendance->save();
        $this->emit('UpdateEmployee');
        $this->status = 0;
    }
    public function back(){
        $this->status = 0;
    }
    public function render()
    {
        $this->view_attendance = AttendanceModel::all();
        return view('livewire.chennai.controls.attendance-status');
    }
}
