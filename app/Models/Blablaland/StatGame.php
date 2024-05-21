<?php

namespace App\Models\Blablaland;

use App\Models\Player;
use App\Traits\Blablaland\StatGameTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static wherePlayerId($id)
 * @method static whereGame(string $string)
 */
class StatGame extends Model
{
    use HasFactory, StatGameTrait;

    /**
     * @return BelongsTo
     */
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class)->withTrashed();
    }
}
