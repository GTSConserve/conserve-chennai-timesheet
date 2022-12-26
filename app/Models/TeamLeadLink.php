<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamLeadLink extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasOne(Employee::class,'user_id','user_id');
    }
}
