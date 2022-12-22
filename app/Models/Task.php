<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public function subtask(){
        return $this->belongsTo(SubTask::class,'task_id','id');
    }
    public function sub_task_count(){
        return $this->hasMany(SubTask::class,'task_id','id');
    }
    
}
