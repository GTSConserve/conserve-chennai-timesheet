<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function mapping_view(){
        return $this->hasMany(ActivityLink::class,'project_id','id');
    }
}
