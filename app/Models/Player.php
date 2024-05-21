<?php

namespace App\Models;

use App\Models\Blablaland\StatGame;
use App\Traits\PlayerTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory, PlayerTrait, SoftDeletes;

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    /**
     * @return BelongsTo
     */
    public function skin(): BelongsTo
    {
        return $this->belongsTo(Skin::class);
    }

    /**
     * @return BelongsToMany
     */
    public function skins(): BelongsToMany
    {
        return $this->belongsToMany(Skin::class)->withPivot('id', 'color', 'favorite')->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function powers(): BelongsToMany
    {
        return $this->belongsToMany(Power::class)->withPivot('id', 'quantity')->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function smileys(): BelongsToMany
    {
        return $this->belongsToMany(Smiley::class)->withTimestamps();
    }

    /**
     * @return HasMany
     */
    public function punishments(): HasMany
    {
        return $this->hasMany(Punishment::class);
    }

    /**
     * @return HasMany
     */
    public function statGames(): HasMany
    {
        return $this->hasMany(StatGame::class);
    }
}
