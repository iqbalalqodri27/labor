<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaboratoryUse extends Model
{
    protected $fillable = [
        'teachers_id',
        'studies_id',
        'classrooms_id',
        'entry_time',
        'close_time',
    ];
}
