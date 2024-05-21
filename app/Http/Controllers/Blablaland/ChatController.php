<?php

namespace App\Http\Controllers\Blablaland;

use App\Enums\PowerType;
use App\Http\Controllers\Controller;
use App\Models\Affinity;
use App\Models\Blablaland\MiniMonster;
use App\Models\Blablaland\TipMessage;
use App\Models\Player;
use App\Models\Power;
use App\Models\Smiley;
use App\Tools\SocketMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;

class ChatController extends Controller
{
    private array $message = array();
    private array $achatWrapper = [
        2 => [ // Powers
            '370', '14', '15', '16', '17', '18', '80', '116', '162', '164', '165', '179', // Potions
            '205', '204', '203', // Irwish
            '361', '363', '364', '365', // Mini Monstres
            '371', '214', '223', '222', '280', '136', '215', '216', '218', '219', '220', '221', // Festival des Neiges
            '105', '106', '107', '108', // Coco Center
            // '217', '227', '287', '288', '289', '290', '291', '292', // Nouvel an astiatique
            '245' // Mine entrée (mystoria)
        ], 3 => [ // Smiley
            '7', '12', '13', '11', '10', '9', '8', '6', '5', '2'  // Coco Center
        ]
    ];

    /**
     * @param Request $request
     * @return string
     */
    public function getBBL(Request $request): string
    {
        $session = $request->input('SESSION');
        $cache = $request->input('CACHE');
        $user = $this->checkSession($session);
        $this->message['BBL'] = $user->blabillon ?? 0;
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function keepAlive(Request $request): string
    {
        $session = $request->input('SESSION');

        if ($this->checkSession($session)) {
            $this->message['RESULT'] = 1;

        } else {
            $this->message['RESULT'] = 0;
        }
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function dailyMessage(Request $request): string
    {
        $session = $request->input('SESSION');

        if ($this->checkSession($session)) {
            $tipMessage = TipMessage::inRandomOrder()->first();
            if ($tipMessage) {
                $this->message['MSG'] = $tipMessage->message;
            }
        }
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function getPrisonMotif(Request $request): string
    {
        $uid = $request->input('UID');
        $player = Player::find($uid);
        $user = Auth::user();

        if ($player && $user) {
            if ($uid == $user->player->id) {
                $this->message['MOTIF']     = $player->reason_ban;
                $this->message['EXPIRE']    = $player->experience_ban;
            }
        }
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function pricesInfos(Request $request): string
    {
        $session = $request->input('session');
        $number = 0;

        if ($this->checkSession($session)) {
            for ($i = 0; $i < $request->input('NB'); $i++) {
                $value = $request->input('ID_' . $i);
                if (str_contains($value, '3_')) {
                    $smiley = Smiley::find(explode('_', $value)[1]);
                    if ($smiley) {
                        $this->message['ID_' . $i] = $value;
                        $this->message['NAME_' . $i] = $smiley->name;
                        $this->message['COST_' . $i] = $smiley->price;
                        $number++;
                    }
                }
                else {
                    $power = Power::find($value);
                    if ($power) {
                        $this->message['ID_' . $i] = $value;
                        $this->message['NAME_' . $i] = $power->name_shop;
                        $this->message['COST_' . $i] = $power->price;
                        $number++;
                    }
                }
            }
        }
        $this->message['NB'] = $number;

        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function achatsWrapper(Request $request): string
    {
        $oID = $request->input('oID');
        $type = $request->input('type');
        $oNb = $request->input('oNb');
        $session = $request->input('session');

        $this->message['RESULT']  = 0;

        if ($player = $this->checkSession($session)) {
            if (in_array($oID, $this->achatWrapper[$type])) {
                switch ($type) {
                    case 3:
                        $smiley = Smiley::find($oID);
                        if (!$player->smileys->contains($oID) && $smiley && $player->blabillon > $smiley->price) {
                            $smiley->attach();
                            $this->message['RESULT']        = 1;
                            $this->message['OID']           = $oID;
                            $this->message['OID_LABEL']     = $smiley->name;
                            $this->message['ONB']           = $oNb;
                            $this->message['TYPE']          = $type;
                            $player->blabillon          -= $smiley->price;
                            $player->save();
                        }
                        break;
                    case 2:
                        $hasPower = $player->powers->contains($oID);
                        if ($oID == 361 && !$player->powers->contains(362)) $oID = 362;
                        $power = Power::find($oID);
                        if ($power && ($player->blabillon > ($power->price * $oNb))) {
                            if (!$hasPower || ($hasPower && $power->type != PowerType::OneTime)){
                                $power->attach($oNb, false, false);

                                $this->message['RESULT'] = 1;
                                $this->message['OID'] = $oID === 362 ? 361 : $oID;
                                $this->message['OID_LABEL'] = $power->shop_name;
                                $this->message['ONB'] = $oNb;
                                $this->message['TYPE'] = $type;

                                $player->blabillon -= $power->price * $oNb;
                                $player->save();

                                if (in_array($oID, [361, 362])) {
                                    if (!MiniMonster::wherePlayerId($player->id)->wherePowerId($oID)->first()) {
                                        MiniMonster::create(['player_id' => $player->id, 'power_id' => $oID]);
                                    }
                                }
                            }
                        }
                        break;
                    default:
                        break;
                }
            }
        }
        return http_build_query($this->message);
    }


    /**
     * @param Request $request
     * @return string
     */
    public function contactManager(Request $request): string
    {
        $action = $request->input('ACTION');
        $params = $request->input('PARAMS');
        parse_str($params, $params);

        $targetId = $params['TARGETID'];
        $this->message['RES'] = 0;

        $player = $this->checkSession($params['SESSION']);
        $playerTarget = Player::whereId($targetId)->first();

        if ($player && $playerTarget) {
            $friend = $player->friend($targetId);
            $blackList = $player->blackList($targetId);
            switch ($action) {
                case 1: // Friend request
                    if ($player->id === $playerTarget->id) {
                        $this->message['ERROR'] = 'SELF_INVIT';
                    } else if ($player->friends()->count() >= 40) {
                        $this->message['ERROR'] = 'FROM_LIST_FULL';
                    } else if ($playerTarget->friends()->count() >= 40) {
                        $this->message['ERROR'] = 'TARGET_LIST_FULL';
                    } else if ($playerTarget->blackList($player->id)) {
                        $this->message['ERROR'] = 'BLACK_LISTED';
                    } else if ($friend) {
                        if ($friend->receiver_id == $targetId && !$friend->accepted) {
                            $this->message['ERROR'] = 'PENDING';
                        } else if ($friend->accepted) {
                            $this->message['ERROR'] = 'FRIEND_LISTED';
                        } else {
                            $this->message['ERROR'] = 'ACCEPT';
                            $friend->accepted = 1;
                            $friend->save();

                            $socketMessage = new SocketMessage(11, 4);
                            $socketMessage->sendAffinity($player->user, $playerTarget->user, 2);
                        }
                    }
                    if (empty($this->message['ERROR'])) {
                        Affinity::create([
                            'sender_id' => $player->id,
                            'receiver_id' => $targetId,
                            'accepted' => 0,
                            'type' => 'FRIEND'
                        ]);
                        $this->message['RES'] = 1;
                        $socketMessage = new SocketMessage(11, 4);
                        $socketMessage->sendAffinity($player->user, $playerTarget->user, 1);
                    }
                    break;
                case 2: // Accept Friend Request
                    if ($friend) {
                        if ($friend->accepted) {
                            $this->message['ERROR'] = 'FRIEND_LISTED';
                        } else if ($player->friends()->count() >= 40) {
                            $this->message['ERROR'] = 'FROM_LIST_FULL';
                        } else if ($playerTarget->friends()->count() >= 40) {
                            $this->message['ERROR'] = 'TARGET_LIST_FULL';
                        } else if ($playerTarget->blackList($player->id)) {
                            $this->message['ERROR'] = 'BLACK_LISTED';
                        } else if ($friend->sender_id != $player->id) {
                            $friend->accepted = 1;
                            $friend->save();

                            $this->message['RES'] = 1;

                            $socketMessage = new SocketMessage(11, 4);
                            $socketMessage->sendAffinity($player->user, $playerTarget->user, 2);
                        }
                    }
                    break;
                case 3: // Remove Friend
                    if ($friend) {
                        $friend->delete();

                        $this->message['RES'] = 1;

                        $socketMessage = new SocketMessage(11, 4);
                        $socketMessage->sendAffinity($player->user, $playerTarget->user, 3);
                    }
                    break;
                case 4: // Add Blacklist
                    if ($blackList) {
                        $this->message['ERROR'] = 'BLACK_LISTED';
                    } else if ($player->getBlackList()->count() >= 40) {
                        $this->message['ERROR'] = 'BLACK_LIST_FULL';
                    } else if ($player->id === $playerTarget->id) {
                        $this->message['ERROR'] = 'SELF_BLACKLIST';
                    }

                    if (empty($this->message['ERROR'])) {
                        Affinity::create([
                            'sender_id' => $player->id,
                            'receiver_id' => $targetId,
                            'accepted' => 1,
                            'type' => 'BLACKLIST'
                        ]);
                        $this->message['RES'] = 1;
                        $socketMessage = new SocketMessage(11, 4);
                        $socketMessage->sendAffinity($player->user, $playerTarget->user, 4);
                    }
                    break;
                case 5: // Remove Blacklist
                    if ($blackList) {
                        $blackList->delete();

                        $this->message['RES'] = 1;

                        $socketMessage = new SocketMessage(11, 4);
                        $socketMessage->sendAffinity($player->user, $playerTarget->user, 5);
                    }
                    break;
                default:
                    break;
            }
        }

        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function noelPhoto(Request $request)
    {
        $img = ImageManager::imagick()->read($request->getContent());
        return $img->toPng();
    }

    /**
     * @param $session
     * @return mixed
     */
    private function checkSession($session): mixed
    {
        $player = Player::whereSession($session)->first();
        return $player ? $player : 0;
    }
}
