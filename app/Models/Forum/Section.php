<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * category
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * sections
     *
     * @return HasMany
     */
    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    /**
     * topics
     *
     * @return HasMany
     */
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
