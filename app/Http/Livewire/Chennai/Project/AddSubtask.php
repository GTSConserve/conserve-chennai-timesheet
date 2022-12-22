<?php

namespace App\Http\Livewire\Chennai\Project;
use App\Models\Task;
use App\Models\SubTask;
use App\Models\SubTasks2;
use Livewire\Component;

class AddSubtask extends Component
{
    public $inputs = [];
    public $i=0;
    public $sub_account_name=[];
    public $edit_inputs = [];
    public $edit_i=0;
    public $edit_sub_account_name=[];
    public $status,$sub_task,$edit_sub_task;
    public $update_id;
    public $task_name,$sub_task_status;
    public $edit_task_name,$edit_sub_task_status;
    public function add(){
        $this->status = 1;
        $this->sub_task = 0;
    }
    public function back(){
        $this->status = "";
    }
    public function sub_task_yes(){
        $this->sub_task = 1;
    }public function sub_task_no(){
        $this->sub_task = "";
        $this->inputs = [];
    }
    public function edit_sub_task_yes(){
        $this->edit_sub_task = 1;
    }public function edit_sub_task_no(){
        $this->edit_sub_task = "";
        $this->edit_inputs = [];
    }
    public function addDiv($increment)
    {
        $this->i = $increment+1;
        $this->sub_account_name[$increment+1]='';
        array_push($this->inputs, $increment+1);
    }
    public function removeDiv($decrement){
        if($decrement!=1)
        {
         $this->i=$decrement-1;
        }
        else{
         $this->i=$this->i-$decrement;
        }
         unset($this->inputs[$decrement-1]);
         unset($this->sub_account_name[$decrement]);
    }
    public function edit_addDiv($increment)
    {
        $this->edit_i = $increment+1;
        $this->edit_sub_account_name[$increment+1]='';
        array_push($this->edit_inputs, $increment+1);
    }
    public function edit_removeDiv($decrement){
        if($decrement!=1)
        {
         $this->edit_i=$decrement-1;
        }
        else{
         $this->edit_i=$this->edit_i-$decrement;
        }
         unset($this->edit_inputs[$decrement-1]);
         unset($this->edit_sub_account_name[$decrement]);
    }
    public function add_task(){
        $add_task = SubTask::where('id',$this->task_name)->first();
        $add_task->status = $this->sub_task_status;
        $add_task->save();
        if($this->sub_account_name !=""){
            foreach($this->sub_account_name as $key => $value){
                $add_sub_task = new SubTasks2;
                $add_sub_task->sub_task_id  = $this->task_name;
                $add_sub_task->name = $this->sub_account_name[$key];
                $add_sub_task->save();
            }
        }
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function edit($id){
        $this->update_id = $id;
        $this->status = 2;
        $edit_task = Task::where('id',$this->update_id)->first();
        $this->edit_task_name = $edit_task->name;
        $this->edit_sub_task_status = $edit_task->status;
        if($this->edit_sub_task_status == 1){
            $this->edit_sub_task = 1;
        }else{
            $this->edit_sub_task = 0;
            $this->edit_inputs = [];
            $this->edit_sub_account_name = "";
        }
        $edit_sub_task_view = SubTask::where('task_id',$this->update_id)->get();
        if($edit_sub_task_view !=""){
            $this->edit_i = 0;
            $this->edit_inputs = [];
            $this->edit_i++;
            foreach($edit_sub_task_view as $key => $value)
            {
                $this->edit_sub_account_name[$key] = $value->name;
                array_push($this->edit_inputs,$this->edit_i);
            }
        }
    }
    public function update(){
        $update_task = Task::where('id',$this->update_id)->first();
        $update_task->name = $this->edit_task_name;
        $update_task->status = $this->edit_sub_task_status;
        $update_task->save();
        if($this->edit_sub_task_status == 1)
        {
            $update_sub = SubTask::where('task_id',$this->update_id)->first();
            if($update_sub !=""){
                SubTask::where('id',$this->update_id)->delete();
            }
            foreach($this->edit_sub_account_name as $key => $value)
            {
                $update_sub_task = new SubTask;
                $update_sub_task->task_id = $update_task->id;
                $update_sub_task->name = $this->edit_sub_account_name[$key];
                $update_sub_task->save();
            }
        }
        else{
            $this->edit_sub_task = "";
            $this->edit_inputs = [];
            $update_sub = SubTask::where('task_id',$this->update_id)->first();
                if($update_sub !=""){
                    SubTask::where('task_id',$this->update_id)->delete();
                }
        }
        $this->reset();
        $this->emit('UpdateEmployee');
        $this->status = "";
    }
    public function render()
    {
        $subtask2_view = SubTask::all();
        $subtasks_list = SubTask::all();
        return view('livewire.chennai.project.add-subtask',['subtask2_views' => $subtask2_view ,'subtasks_lists'=> $subtasks_list]);
    }
}
