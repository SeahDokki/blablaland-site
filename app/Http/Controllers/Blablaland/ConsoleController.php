<?php

namespace App\Http\Controllers\Blablaland;

use App\Http\Controllers\Controller;
use App\Models\Blablaland\BadWord;
use App\Models\Blablaland\Penalty;
use App\Models\Blablaland\TipMessage;
use App\Models\Grade;
use App\Models\Login;
use App\Models\Player;
use App\Models\Punishment;
use App\Models\Right;
use App\Models\Skin;
use App\Models\User;
use App\Models\Blablaland\Statut;
use App\Tools\Network;
use App\Tools\SocketMessage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ConsoleController extends Controller
{
    private array $message = array();

    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $user = Auth::user();
        if (!$user || !$user->isModerator()) {
            abort(404);
        } else {
            $socketMessage = new SocketMessage(11, 3);
            $socketMessage->allowIP($user->getIP());
        }
        return view('console.index');
    }

    /**
     * @param Request $request
     * @return string
     */
    public function getSession(Request $request): string
    {
        $username = $request->input('LOGIN');
        $password = $request->input('PASS');

        $this->message['RESULT'] = 0;

        if($this->getCredentials($username, $password))
        {
            $user = User::whereUsername($username)->first();

            if($user->grade->id >= 90)
            {
                $this->message['RESULT'] = 1;
                $this->message['SESSION'] = $user->player->session;
            }
        }

        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return void
     */
    public function clearSession(Request $request): void
    {
        $session = $request->input('SESSION');
        $player = $this->checkSession($session) ;

        if ($player) {
            $player->session = Str::random(10);
            $player->save();
        }
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
    public function getLightEffect(Request $request): string
    {
        $session = $request->input('SESSION');
        $cache = $request->input('CACHE');

        if ($this->checkSession($session, 'LIGHTEFFECT')) {
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
    public function setLightEffect(Request $request): string
    {
        $session = $request->input('SESSION');
        $light = $request->input('LIGHT');
        $color = $request->input('COLOR');
        $cache = $request->input('CACHE');

        $player = $this->checkSession($session, 'LIGHTEFFECT') ;

        if ($player) {
            $this->message['RESULT'] = 1;

            if (!$light) $color = null;
            $player->shine = $color;
            $player->save();
        } else {
            $this->message['RESULT'] = 0;
        }
        return http_build_query($this->message);
    }


    /**
     * @param Request $request
     * @return string
     */
    public function getAKBList(Request $request): string
    {
        $session = $request->input('SESSION');
        $cache = $request->input('CACHE');

        if ($this->checkSession($session)) {
            $this->message['RESULT'] = 1;

            foreach (Penalty::all() as $key => $penalty) {
                $this->message['DESC_' .  $key]         = $penalty->name;
                $this->message['MOTIF_' .  $key]        = $penalty->description;
                $this->message['DURE_' .  $key]         = $penalty->duration;
                $this->message['LVLMP_' .  $key]        = $penalty->grade_id;
                $this->message['LVLKICK_' .  $key]      = $penalty->grade_id;
                $this->message['LVLBAN_' .  $key]       = $penalty->grade_id;
            }
            $this->message['NB'] = Penalty::count();
        } else {
            $this->message['RESULT'] = 0;
        }

        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function casierJudiciere(Request $request): View|Factory|Application
    {
        $session = $request->input('SESSION');
        $userId = $request->input('UID');

        $punishements = Punishment::wherePlayerId($userId)->orderByDesc('created_at')->get();

        if (!$this->checkSession($session, 'USERCASIERADV')) {
            abort(404);
        }

        return view('console.punishement', compact('punishements'));
    }

    /**
     * @param Request $request
     * @return string
     */
    public function getCasierJudiciere(Request $request): string
    {
        $session = $request->input('SESSION');
        $userId = $request->input('UID');
        $cache = $request->input('CACHE');

        if ($this->checkSession($session, 'USERCASIER')) {
            $this->message['RESULT'] = 1;

            $punishements = Punishment::wherePlayerId($userId)->orderByDesc('created_at')->get();

            if ($punishements) {
                foreach($punishements as $key => $punishement) {
                    $data = $punishement->reason . ' -- ' . $punishement->moderator->pseudo;

                    $this->message['NB_' . $key]        = $punishement->duration;
                    $this->message['TYPE_' . $key]      = $punishement->type;
                    $this->message['DATA_' . $key]      = $data;
                    $this->message['DATE_'. $key]       = $punishement->created_at->timestamp;
                }

                $nbTotalBan = $punishements->where('type', 'BAN')->count();
                $nbTotalBan = $nbTotalBan + $punishements->where('type', 'FORUM_BAN')->count();

                $this->message['TOTKICK']       = $punishements->where('type', 'KICK')->count();
                $this->message['TOTBAN']        = $nbTotalBan;
                $this->message['TOTBANDURE']    = $punishements->sum('duration');

                $this->message['NB'] = $punishements->count();
            }
        } else {
            $this->message['RESULT'] = 0;
        }
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function casierJudiciereAdd(Request $request): string
    {
        $session = $request->input('SESSION');
        $userId = $request->input('UID');
        $pseudo = $request->input('PSEUDO');
        $data = $request->input('DATA');
        $cache = $request->input('CACHE');

        if ($this->checkSession($session) && isset($data)) {
            $this->message['RESULT'] = 1;

            $player = Player::whereId($userId)->first();
            $moderator = Player::whereSession($session)->first();

            if ($player && $moderator) {
                Punishment::create([
                    'reason' => $data,
                    'duration' => 0,
                    'type' => 'INFO',
                    'player_id' => $player->id,
                    'moderator_id' => $moderator->id,
                ]);
            }
        } else {
            $this->message['RESULT'] = 0;
        }
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function searchUser(Request $request): string
    {
        $session = $request->input('SESSION');
        $pseudo = $request->input('PSEUDO');
        $playerId = $request->input('UID');

        if ($this->checkSession($session)) {
            $this->message['RESULT'] = 1;

            if ($pseudo) {
                $players = Player::where('pseudo', 'LIKE', $pseudo . '%')->get();
                $this->message['NB'] = $players->count();

                foreach ($players as $key => $player) {
                    $this->message['PSEUDO_' . $key]    = $player->pseudo;
                    $this->message['UID_' . $key]       = $player->id;
                    $this->message['IP_' . $key]        = $player->user->logins()->first();
                }
            }
        } else {
            $this->message['RESULT'] = 0;
        }
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function getUserListing(Request $request): string
    {
        $session = $request->input('SESSION');
        $start = $request->input('START', 0);
        $sortBy = $request->input('SORTBY');
        $orderBy = [];

        if ($this->checkSession($session)) {
            $this->message['RESULT'] = 1;

            if ($sortBy) {
                $sortFields         = explode(',', $sortBy);
                $validSortFields    = ['pseudo', 'grade_id', 'online'];

                foreach ($sortFields as $sortField) {
                    [$field, $order] = explode(' ', trim($sortField));

                    if (in_array($field, $validSortFields)) {
                        if ($field === 'grade') {
                            $field = 'grade_id';
                        }
                        $orderBy[] = $field . ' ' . strtoupper($order);
                    }
                }
            }

            $playersQuery = Player::with('user')->where('user_id', '>', $start * 50)
                                    ->limit(50);

            foreach ($orderBy as $order) {
                [$field, $direction] = explode(' ', $order);
                $playersQuery->orderBy($field, $direction);
            }

            $players                = $playersQuery->get();
            $this->message['NB']    = $players->count();

            foreach ($players as $key => $player) {
                $this->message['UID_' . $key]       = $player->id;
                $this->message['PSEUDO_' . $key]    = $player->pseudo;
                $this->message['IP_' . $key]        = $player->user->logins()->first();
                $this->message['ONLINE_' . $key]    = $player->online;
            }
        } else {
            $this->message['RESULT'] = 0;
        }

        return http_build_query($this->message);
    }


    /**
     * @param Request $request
     * @return string
     */
    public function updatePseudo(Request $request): string
    {
        $session = $request->input('SESSION');
        $playerId = $request->input('UID');
        $result = 1;

        if ($this->checkSession($session, 'UPDATEPSEUDO')) {
            $player = Player::whereId($playerId)->first();
            $moderator = Player::whereSession($session)->first();

            if ($moderator->user->grade_id < $player->user->grade_id) {
                $result = 2;
            } else if ($player->pseudo === $player->user->username) {
                $result = 3;
            }

            if ($result === 1) {
                $player->punishments()->create([
                    'reason' => 'Reset pseudo (' . $player->pseudo . ')',
                    'duration' => 0,
                    'type' => 'INFO',
                    'player_id' => $playerId,
                    'moderator_id' => $moderator->id
                ]);
                $player->pseudo = $player->user->username;
                $player->save();
            }
        } else {
            $result = 0;
        }
        $this->message['RESULT'] = $result;
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function gradesNameList(Request $request): string
    {
        $session = $request->input('SESSION');
        $get = $request->input('GET');

        if ($this->checkSession($session, 'LVLNAMECHANGE')) {
            $this->message['RESULT'] = 1;
            $statuts = Statut::all();
            $this->message['NB'] = $statuts->count();

            foreach ($statuts as $key => $statut) {
                $this->message['ID_' . $key]        = $statut->id;
                $this->message['LEVEL_' . $key]     = 0;
                $this->message['XP_' . $key]        = $statut->experience;
                $this->message['NAME_' . $key]      = $statut->name;
            }
        } else {
            $this->message['ERROR'] = 1;
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
        $getList = $request->input('GETLIST');
        $this->message['RESULT'] = 0;

        if ($this->checkSession($session, 'DAILYMSGCHANGE')) {
            $this->message['RESULT'] = 1;

            if ($getList) {
                $tipMessages = TipMessage::all();
                $this->message['NB'] = $tipMessages->count();

                foreach ($tipMessages as $key => $tipMessage) {
                    $this->message['ID_' . $key]        = $tipMessage->id;
                    $this->message['TEXT_' . $key]      = $tipMessage->message;
                    $this->message['MULTI_' . $key]     = 'on';
                }
            }
        }
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function setDroits(Request $request): string
    {
        $session = $request->input('SESSION');
        $params = $request->all();

        if ($this->checkSession($session, 'DROITSCHANGE')) {
            $this->message['RESULT'] = 1;

            foreach ($params as $key => $value) {
                if (!in_array($key, ['SESSION', 'CACHE'])) {
                    $grade = Grade::whereId($value)->exists();
                    if ($grade) {
                        Right::whereName($key)->update(['grade_id' => $value]);
                    }
                }
            }
        } else {
            $this->message['RESULT'] = 0;
        }
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function getInsultronList(Request $request): string
    {
        $session = $request->input('SESSION');

        if ($this->checkSession($session, 'INSULTRONCHANGE')) {
            $badWords = BadWord::all();
            $this->message['RESULT'] = 1;
            $this->message['NB'] = $badWords->count();

            foreach ($badWords as $key => $badWord) {
                $this->message['QUERY_' . $key]        = $badWord->query;
                $this->message['REPLACE_' . $key]      = $badWord->replace;
                $this->message['PUBLIC_' . $key]       = $badWord->public;
                $this->message['PRIVE_' . $key]      = $badWord->private;
                $this->message['EXTRACHAR_' . $key]    = $badWord->extra_char;
                $this->message['CENSURE_' . $key]      = $badWord->censorship;
                $this->message['CENSUREALL_' . $key]   = $badWord->censorship_all;
                $this->message['PTSALERT_' . $key]     = $badWord->point;
            }
        } else {
            $this->message['RESULT'] = 0;
        }
        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function setInsultronList(Request $request): string
    {
        $session = $request->input('SESSION');
        $nb = $request->input('NB');
        $queryList = [];

        if ($this->checkSession($session, 'INSULTRONCHANGE')) {
            $this->message['RESULT'] = 1;

            for ($i = 0; $i < $nb; $i++) {
                $query      = $request->input('QUERY_' . $i);
                $replace    = $request->input('REPLACE_' . $i);
                $public     = $request->input('PUBLIC_' . $i);
                $private    = $request->input('PRIVE_' . $i);
                $extraChar  = $request->input('EXTRACHAR_' . $i);
                $censure    = $request->input('CENSURE_' . $i);
                $censureAll = $request->input('CENSUREALL_' . $i);
                $point      = $request->input('PTSALERT_' . $i);

                BadWord::updateOrCreate([
                    'query'         => $query
                ], [
                    'replace'        => $replace         ?? $query,
                    'point'          => $point           ?? 0,
                    'public'         => $public          ?? 0,
                    'private'        => $private         ?? 0,
                    'extra_char'     => $extraChar       ?? 0,
                    'censorship'     => $censure         ?? 0,
                    'censorship_all' => $censureAll      ?? 0,
                ]);
                $queryList[] = $query;
            }
            foreach (BadWord::all() as $badWord) {
                if (!in_array($badWord->query, $queryList)) {
                    $badWord->delete();
                }
            }
        } else {
            $this->message['RESULT'] = 0;
        }

        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function advServer(Request $request): string
    {
        $session = $request->input('SESSION');
        $act = $request->input('act');

        if ($this->checkSession($session, 'ADVACCESS')) {
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
    public function getGradeUser(Request $request): string
    {
        $session = $request->input('SESSION');
        $uid = $request->input('UID');

        $this->message['RESULT'] = 0;

        if ($this->checkSession($session, 'GRADESCHANGE')) {
            $user = User::find($uid);
            if ($user) {
                $this->message['RESULT'] = 1;
                $this->message['GRADE'] = $user->grade_id;
            }
        }

        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function setGradeUser(Request $request): string
    {
        $session = $request->input('SESSION');
        $uid = $request->input('UID');
        $grade = $request->input('GRADE');

        $this->message['RESULT'] = 0;

        $player = $this->checkSession($session, 'GRADESCHANGE');
        if ($player) {
            $user = User::find($uid);
            if ($user && Grade::find($grade)
            //&& $player->user->grade->id >= $grade
                ) {
                $user->grade_id = $grade;
                $user->save();
                $this->message['RESULT'] = 1;

                if (!$user->isModerator()) {
                    $this->detachSkinIfNeeded($user, 5);
                    $this->detachSkinIfNeeded($user, 80);
                } else {
                    $this->attachSkinIfNeeded($user, 5);
                    $this->attachSkinIfNeeded($user, 80);
                }
            }
        }

        return http_build_query($this->message);
    }


    /**
     * @param Request $request
     * @return string
     */
    public function getUserByIp(Request $request): string
    {
        $session = $request->input('SESSION');
        $IP = $request->input('IP');

        if($this->checkSession($session, 'USERCASIER')) {
            $this->message['RESULT'] = 1;

            $logins = Login::whereIpAddress(long2ip($IP))
                ->with('user.player', 'user.grade')
                ->get();

            $loginsByUser = $logins->groupBy('user_id');
            $this->message['NB'] = $loginsByUser->count();

            $key = 0;
            foreach ($loginsByUser as $loginsGroup) {
                $user = $loginsGroup->first()->user;

                $this->message['UID_' . $key]       = $user->player->id;
                $this->message['PSEUDO_' . $key]    = $user->player->pseudo;
                $this->message['GRADE_' . $key]     = $user->grade->id;
                $this->message['ONLINE_' . $key]    = $user->player->online;
                $key++;
            }
        } else {
            $this->message['RESULT'] = 0;
        }

        return http_build_query($this->message);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function IPLogDB(Request $request): string
    {
        $session = $request->input('SESSION');
        $startAt = $request->input('STARTAT');
        $backTo = $request->input('BACKTO');

        if($this->checkSession($session, 'IPLOGDB')) {
            $this->message['RESULT'] = 1;
        } else {
            $this->message['RESULT'] = 0;
        }
        return http_build_query($this->message);
    }

    /**
     * @param $user
     * @param $skinId
     * @return void
     */
    function detachSkinIfNeeded($user, $skinId): void
    {
        if ($user->player->skins->contains($skinId)) {
            $user->player->skins()->detach($skinId);
        }
    }

    /**
     * @param $user
     * @param $skinId
     * @return void
     */
    function attachSkinIfNeeded($user, $skinId): void
    {
        if (!$user->player->skins->contains($skinId)) {
            $skin = Skin::find($skinId);
            if ($skin) {
                $user->player->skins()->attach($skin, [
                    'color' => $skin->color
                ]);
            }
        }
    }


    /**
     * @param $username
     * @param $password
     * @return bool
     */
    private function getCredentials($username, $password): bool
    {
        return Auth::once(array(
            'username' => $username,
            'password' => $password,
        ));
    }

    /**
     * @param $session
     * @param $right
     * @return void|null
     */
    private function checkSession($session, $right = null)
    {
        $player = Player::whereSession($session)->first();
        if (!$player) return null;
        if (!$right) return $player;

        $rights = $player->user
            ->grade
            ->rights()
            ->where('name', $right)
            ->first();

        if ($rights) return $player;
    }
}
