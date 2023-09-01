<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AdvertCategory extends Pivot
{
    public $table = 'advertisement_category';

    protected $fillable = [
        'advertisement_id',
        'category_id',
    ];
}
