<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlanOption extends Model
{
    public $timestamps = false;
    public $table = 'plan_options';

    protected $fillable = [
        'plans_id',
        'categories_count',
        'sub_categories_count',
        'group',
    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
}
