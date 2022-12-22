<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLink extends Model
{
    use HasFactory;
    public $table="activity_links";
    public function activity(){
        return $this->belongsTo(Activity::class,'activity_id','id');
    }
}
