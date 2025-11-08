<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LaboratoryUse;
use HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class teacher extends Model
{
   protected $fillable = [
    'nip',    
    'name',
    ];

    public function laboratoryuses(){

    return $this->hasMany(LaboratoryUse::class);
}


}
