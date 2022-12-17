<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
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
}