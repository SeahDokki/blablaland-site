<?php

namespace App\Models;

use App\Traits\AffinityTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Affinity extends Model
{
    use HasFactory, AffinityTrait;

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function sender()
    {
        return $this->belongsTo(Player::class)->withTrashed();
    }

    /**
     * @return BelongsTo
     */
    public function receiver(): BelongsTo
    {
        return $this->belongsTo(Player::class)->withTrashed();
    }
}
