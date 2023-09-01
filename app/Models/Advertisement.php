<?php

namespace App\Models;

use App\Traits\SoftDeletes;
use Database\Factories\AdvertisementFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Advertisement extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;

    public $fillable = [
        'partner_id',
    ];

    protected static function newFactory(): AdvertisementFactory
    {
        return AdvertisementFactory::new();
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->using(AdvertCategory::class);
    }

    public function categoryChildren(): BelongsToMany
    {
        return $this->belongsToMany(CategoryChild::class)->using(AdvertCategoryChild::class);
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('deleted_at', null);
    }
}
