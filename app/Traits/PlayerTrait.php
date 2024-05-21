<?php

namespace App\Traits;

use App\Models\Affinity;

trait PlayerTrait
{
    /**
     * @param $value
     * @return string
     */
    public function getPseudoAttribute($value): string
    {
        return $this->trashed() ? 'Touriste_' . $this->id : $value;
    }

    /**
     * @param $value
     * @return string
     */
    public function getPseudoColorAttribute($value): string
    {
        $color = $this->trashed() ? 'black' : $this->user->grade->color;
        return "<span style='color:$color'>" . $this->pseudo . "</span>";
    }

    /**
     * @return bool
     */
    public function isConnected(): bool
    {
        return $this->online === 1;
    }

    /**
     * @return mixed
     */
    public function friends(): mixed
    {
        return Affinity::where('accepted', 1)
            ->where('type', 'FRIEND')
            ->where(function ($query) {
                $query->where('sender_id', $this->id)
                    ->orWhere('receiver_id', $this->id);
            })
            ->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function friend($id): mixed
    {
        $affinity = Affinity::whereType('FRIEND')
            ->where('sender_id', $this->id)
            ->where('receiver_id', $id)
            ->first();
        if (!$affinity) {
            $affinity = Affinity::whereType('FRIEND')
                ->where('sender_id', $id)
                ->where('receiver_id', $this->id)
                ->first();
        }
        return $affinity;
    }

    /**
     * @return int
     */
    public function friendsConnected(): int
    {
        $nbConnected = 0;
        foreach ($this->friends() as $friend) {
            if ($friend->getPlayerAffinity()->online) {
                $nbConnected++;
            }
        }
        return $nbConnected;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function blackList($id): mixed
    {
        return Affinity::whereType('BLACKLIST')
            ->where('sender_id', $this->id)
            ->where('receiver_id', $id)
            ->first();
    }

    public function getBlackList(): mixed
    {
        return Affinity::whereType('BLACKLIST')
            ->where('sender_id', $this->id)
            ->whereAccepted(1)
            ->get();
    }

    /**
     * @return mixed
     */
    public function wedding(): mixed
    {
        $affinity = Affinity::whereType('WEDDING')
            ->where('receiver_id', $this->id)
            ->first();
        if (!$affinity) {
            $affinity = Affinity::whereType('WEDDING')
                ->where('sender_id', $this->id)
                ->first();
        }
        return $affinity;
    }

    /**
     * @param string $game
     * @return mixed
     */
    public function stats(string $game): mixed
    {
        return $this->statGames()->whereGame($game)->first();
    }
}
