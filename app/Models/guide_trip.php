<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guide_trip extends Model
{
    use HasFactory;
    protected $fillable =[
        'guide_id',
        'trip_id',
    ];
}
