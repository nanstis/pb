<?php

namespace App\Models;

use Database\Factories\AdvertCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AdvertCategory extends Pivot
{
    use HasFactory;

    public $table = 'advertisement_category';
    public $timestamps = false;

    protected $fillable = [
        'advertisement_id',
        'category_id',
    ];

    protected static function newFactory(): AdvertCategoryFactory
    {
        return AdvertCategoryFactory::new();
    }

    public function advertisement(): BelongsTo
    {
        return $this->belongsTo(Advertisement::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


}
