<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskLink extends Model
{
    use HasFactory;
    public $table="task_links";
    public function task_link(){
        return $this->belongsTo(Task::class,'task_id','id');
    }
    // public function activity(){
    //     return $this->belongsTo(Activity::class,'activity_id','id');
    // }

}
