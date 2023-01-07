<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
    protected $casts = [
        // 'start_time'  => 'datetime:H:i',
        // 'end_time'  => 'datetime:H:i',
        // 'end_time'  => 'time:Y-m-d H:00',
        // 'joined_at' => 'datetime:Y-m-d H:00',
    ];
}
