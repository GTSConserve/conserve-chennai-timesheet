<?php

namespace App\Http\Livewire\Chennai\Controls;
use App\Models\Holiday as HolidayModel;
use Livewire\Component;
use Carbon\Carbon;
class Holiday extends Component
{
    public $status=0;
    public $update_id;
    public $inputs = [];
    public $i = 0;
    public $holiday_name = [],$holiday_date = [];
    public $edit_holiday_name,$edit_holiday_date;

    public function addDiv($increment)
    {
        $this->i = $increment + 1;
        $this->holiday_name[$increment + 1] = '';
        $this->holiday_date[$increment + 1] = '';
        array_push($this->inputs, $increment + 1);
    }
    public function removeDiv($decrement)
    {
        unset($this->inputs[$decrement - 1]);
        unset($this->holiday_name[$decrement]);
        unset($this->holiday_date[$decrement]);
    }
    public function save(){
        if($this->holiday_name != ""){
            foreach($this->holiday_name as $key => $value){
                $holiday = new HolidayModel;
                $holiday->name = $this->holiday_name[$key];
                $holiday->date = $this->holiday_date[$key];
                $holiday->day =  date('l', strtotime($this->holiday_date[$key]));
                $holiday->save();
            }
            $this->reset();
            $this->emit('UpdateEmployee');
        }
    }
    public function edit($id){
        $this->update_id = $id;
        $this->status = 1;
        $holiday_edit = HolidayModel::where('id',$id)->first();
        $this->edit_holiday_name = $holiday_edit->name;
        $this->edit_holiday_date = $holiday_edit->date;
    }
    public function update(){
        $holiday_update = HolidayModel::where('id',$this->update_id)->first();
        $holiday_update->name = $this->edit_holiday_name;
        $holiday_update->date = $this->edit_holiday_date;
        $holiday_update->day = date('l', strtotime($this->edit_holiday_date));
        $holiday_update->save();
        $this->emit('UpdateEmployee');
        $this->status = 0;
    }
    public function back(){
        $this->status = 0;
    }
    public function render()
    {
        $this->holday_view = HolidayModel::all();
        return view('livewire.chennai.controls.holiday');
    }
}
