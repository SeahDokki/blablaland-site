<?php

namespace App\Traits;

use App\Enums\PowerType;
use App\Tools\SocketMessage;
use Illuminate\Support\Facades\Auth;

trait PowerTrait
{
    /**
     * @param $quantity
     * @param bool $pack
     * @return void
     */
    public function attach($quantity, bool $pack = true, bool $sendBBL = true): void
    {
        $user = Auth::user();
        $params = ['quantity' => 1];

        $power = $user->player->powers()->find($this);

        if (in_array($this->type, [PowerType::Quantity, PowerType::Time])) {
            if (!$pack) {
                $params['quantity'] = $quantity;
            } else {
                $params['quantity'] = $quantity * $this->pack;
            }
            if ($power) {
                $params['quantity'] += $power->pivot->quantity;
            }
        }

        if ($this->type != PowerType::Pack) {
            if ($power) {
                $user->player->powers()->updateExistingPivot($this, $params);
            } else {
                $user->player->powers()->attach($this, $params);
            }

            $power = $user->player->powers()->find($this);

            if ($power) {
                $socketMessage = new SocketMessage(11, 1);
                $socketMessage->reloadObject($user, $power, $sendBBL);
            }
        }

        foreach ($this->giftPowers as $present) {
            $present->attach($present->pivot->quantity, false);
        }
    }
}
