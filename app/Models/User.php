<?php

namespace App\Models;

use App\Models\Forum\Post;
use App\Notifications\CustomResetPasswordNotification;
use App\Traits\UserTrait;
use App\Models\Blablaland\Statut;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $gender
 * @property int $grade_id
 * @property int $statut_id
 * @property string $signature
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, UserTrait, SoftDeletes;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'website_last_at'   => 'datetime',
        'forum_last_at'     => 'datetime',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token): void
    {
        $this->notify(new CustomResetPasswordNotification($token));
    }

    /**
     * Relation hasOne with the model Player
     *
     * @return HasOne
     */
    public function player(): HasOne
    {
        return $this->hasOne(Player::class)->withTrashed();
    }

    public function discord(): HasOne
    {
        return $this->hasOne(DiscordUser::class);
    }

    /**
     * Relation hasMany with the model Login
     *
     * @return HasMany
     */
    public function logins(): HasMany
    {
        return $this->hasMany(Login::class);
    }

    /**
     * Relation belongsTo with the model Grade
     *
     * @return BelongsTo
     */
    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    /**
     * @return BelongsTo
     */
    public function statut(): BelongsTo
    {
        return $this->belongsTo(Statut::class);
    }

    /**
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return BelongsToMany
     */
    public function statuts(): BelongsToMany
    {
        return $this->belongsToMany(Statut::class);
    }

    /**
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
