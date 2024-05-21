<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Tools\SocketMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkinController extends Controller
{
    private array $message = array();

    /**
     * @param Request $request
     * @return string
     */
    public function getSkinList(Request $request): string
    {
        $session = $request->input('SESSION');
        $user = $this->checkSession($session);

        if ($user) {
            $this->message['RESULT'] = 1;
            $this->message["SKINID"] = $user->skin_id;
            $this->message["SKINCOLOR"] = $user->skins
                ->where('id', $user->skin_id)
                ->first()
                ->strColorPivot ?? 0;
            foreach ($user->skins as $key => $skin) {
                $this->message['SKID_' . $key]      = $skin->id;
                $this->message['SKCOM_' . $key]     = $skin->description ?? '';
                $this->message['SKNAME_' . $key]    = $skin->name;
                $this->message['SKADDON_' . $key]   = $skin->pivot->id;
                $this->message['SKFAVORI_' . $key]  = $skin->pivot->favorite;
                $this->message['SKCOL_' . $key]     = $skin->strColor;
                $this->message['SKLASTCOL_' . $key] = $skin->strColorPivot;
            }
            $this->message["NB"] = $user->skins->count();
        } else {
            $this->message['RESULT'] = 0;
        }
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return bool|string
     */
    public function setSkinData(Request $request): bool|string
    {
        $session = $request->input('SESSION');
        $skinColor = $_GET['SKINCOLOR'] ?? null;
        $skinId = $request->input('SKINID');
        $favoriteValue = $request->input('FAVORI_VALUE');
        $favoriteBdd = $request->input('FAVORI_BDD');

        $user = $this->checkSession($session);
        $this->message['RESULT'] = 0;

        if ($user && $skinId && $skinColor) {
            if ($user->skins->contains($skinId)) {
                if (in_array($skinId, [2, 3, 5, 80]) &&
                    !$user->user->isModerator()) {
                    return false;
                }
                $user->skins()->updateExistingPivot($skinId, [
                    'color' => $this->colorToStr($_GET['SKINCOLOR'])
                ]);
                $user->skin_id = $skinId;
                $user->save();
                $this->message['RESULT'] = 1;

                $socketMessage = new SocketMessage(11, 5);
                $socketMessage->setSkin($user->user, $skinId, array_map("ord", str_split($_GET['SKINCOLOR'])));
            }
        } else if ($user && $favoriteBdd) {
            $skin = $user->skins()->wherePivot('id', $favoriteBdd)->first();
            if ($skin) {
                $user->skins()->updateExistingPivot($skin->id, [
                    'favorite' => $favoriteValue ? $favoriteValue : 0
                ]);
                $this->message['RESULT'] = 1;
            }
        }
        return http_build_query($this->message);
    }

    /**
     * @param $skinColor
     * @return string
     */
    private function colorToStr($skinColor): string
    {
        $color = array_map("ord", str_split($skinColor));
        return implode(";",$color);
    }

    /**
     * @param $session
     * @return mixed
     */
    private function checkSession($session)
    {
        $player = Player::whereSession($session)->first();
        return $player ? $player : 0;
    }
}
