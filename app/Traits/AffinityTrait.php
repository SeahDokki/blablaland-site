<?php

namespace App\Traits;


use App\Models\Affinity;
use Illuminate\Support\Facades\Auth;

trait AffinityTrait
{
    /**
     * @param $user
     * @return mixed
     */
    public function getPlayerAffinity($user = null): mixed
    {
        if (!$user) {
            $user = Auth::user();
        }
        if ($this->sender->id != $user->player->id) {
            return $this->sender;
        } else {
            return $this->receiver;
        }
    }
}
