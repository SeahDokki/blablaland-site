<?php

namespace App\Traits;

use App\Tools\Binary;
use App\Tools\SocketMessage;
use Illuminate\Support\Facades\Auth;

trait SmileyTrait
{
    /**
     * @param bool $sendBBL
     * @return void
     *
     */
    public function attach(bool $sendBBL = true): void
    {
        $user = Auth::user();

        $smiley = $user->player->smileys()->find($this);
        if (!$smiley) {
            $smiley = $user->player->smileys()->attach($this);
            $socketMessage = new SocketMessage(11, 2);
            $socketMessage->reloadPackSmiley($user, $this, $sendBBL);
        }
    }
}
