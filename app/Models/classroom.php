<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LaboratoryUse;
use Illuminate\Database\Eloquent\Relations\HasMany;
use HasFactory;
class classroom extends Model
{
    protected $fillable = [
        'name',
    ];

    public function laboratoryuses(){

    return $this->hasMany(LaboratoryUse::class);
}
}
