<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class LaboratoryUse extends Model

{
    protected $fillable = [
        'teachers_id',
        'studies_id',
        'classrooms_id',
        'entry_time',
        'close_time',
    ];

    public function study(){
        return $this->belongsTo(study::class,'id');
    }

  public function teacher(){
  return $this->belongsTo(teacher::class,'id');
    }

    public function classroom(){
  return $this->belongsTo(classroom::class,'id');
    }



 
}
