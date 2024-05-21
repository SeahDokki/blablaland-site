<?php

namespace App\Models;

use App\Enums\PowerSpecial;
use App\Enums\PowerType;
use App\Traits\PowerTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property string $special
 * @property string $token
 * @property float|int|mixed $price
 * @property int $unavailable
 * @method static whereHidden(int $int)
 * @method static findOrFail(int $int)
 */
class Power extends Model
{
    use HasFactory, PowerTrait;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'special'   => PowerSpecial::class,
        'type'      => PowerType::class
    ];

    /**
     * @return BelongsToMany
     */
    public function asPresent(): BelongsToMany
    {
        return $this->isAGift(Power::class, 'power_power', 'gift_power_id', 'power_id')->withPivot('quantity')->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function giftPowers(): BelongsToMany
    {
        return $this->belongsToMany(Power::class, 'power_power', 'power_id', 'gift_power_id')->withPivot('quantity')->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function players(): BelongsToMany
    {
        return $this->belongsToMany(Player::class)->withPivot('id', 'quantity')->withTimestamps();
    }
}
