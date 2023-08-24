<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    public $timestamps = false;
    public $table = 'plans';

    public $fillable = [
        'name',
    ];

    public function planOptions(): HasMany
    {
        return $this->hasMany(PlanOption::class);
    }
}
