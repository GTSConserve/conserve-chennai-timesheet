<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timesheet extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table="time_sheets";

    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
    public function activity(){
        return $this->belongsTo(Activity::class,'activity_id','id');
    }
    public function task(){
        return $this->belongsTo(Task::class,'task_id','id');
    }
    public function sub_task(){
        return $this->hasOne(SubTask::class,'id','sub_task1_id');
    }
    public function employee(){
        return $this->hasOne(Employee::class,'user_id','user_id');
    }
    public function user_group(){
        return $this->hasOne(Usergroups::class,'id','user_id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','approved_by');
    }
}
