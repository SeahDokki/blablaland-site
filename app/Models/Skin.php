<?php

namespace App\Models;

use App\Enums\SkinSpecial;
use App\Traits\SkinTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static whereHidden(int $int)
 */
class Skin extends Model
{
    protected  $guarded = [];

    use HasFactory, SkinTrait;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'special' => SkinSpecial::class
    ];

    /**
     * @return BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * @return BelongsToMany
     */
    public function giftSkins(): BelongsToMany
    {
        return $this->belongsToMany(Skin::class, 'skin_skin', 'gift_skin_id', 'skin_id')->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function isAGift(): BelongsToMany
    {
        return $this->belongsToMany(Skin::class, 'skin_skin', 'skin_id', 'gift_skin_id')->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function powers(): BelongsToMany
    {
        return $this->belongsToMany(Power::class)->withPivot('quantity')->withTimestamps();
    }
}
