<?php

namespace App\Traits;

use App\Enums\SkinSpecial;
use App\Models\Blablaland\Statut;
use App\Models\Login;
use App\Models\Skin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

trait UserTrait
{

    public function isModerator(): bool
    {
        return $this->grade_id >= 90;
    }

    /**
     * @return bool
     */
    public function isConnected(): bool
    {
        if (isset($this->forum_last_at)) {
            if (now()->diffInMinutes($this->forum_last_at) < 5) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param $value
     * @return string
     */
    public function getUsernameAttribute($value): string
    {
        return $this->trashed() ? 'Touriste_' . $this->id : $value;
    }

    /**
     * @param $value
     * @return string
     */
    public function getUsernameColorAttribute($value): string
    {
        $color = $this->trashed() ? 'black' : $this->grade->color;
        return "<span style='color:$color'>" . $this->username . "</span>";
    }

    /**
     * @return mixed
     */
    public function getStatutNameAttribute(): mixed
    {
        $statut = null;
        if ($this->grade_alias && !$this->isModerator()) {
            $statut = $this->grade_alias;
        } else if (!isset($this->statut_id)) {
            $statut = Statut::where('experience', '<=', $this->player->experience)
                    ->orderBy('experience', 'DESC')
                    ->first()
                    ->name;
        } else {
            $statut = $this->statut->name;
        }
        return "<span class='fw-bold'>$statut</span>";
    }

    public function getGradeNameAttribute(): string
    {
        $grade = $this->grade_alias && $this->isModerator() ? $this->grade_alias : $this->grade->name;
        $color = $this->grade->color;
        return "<span class='fw-bold' style='color:$color'>$grade</span>";
    }

    /**
     * @return int
     */
    public function getCountPostsAttribute(): int
    {
        $grade_id = Auth::check() ? Auth::user()->grade_id : 0;

        return $this->posts()->whereHas('topic.section', function ($query) use ($grade_id) {
            $query->where('view_grade_id', '<=', $grade_id);
        })->count();
    }

    /**
     * @return mixed
     */
    public function getAvatarUrlAttribute(): mixed
    {
        return \Storage::url($this->avatar);
    }

    /**
     * getGenderNameAttribute
     *
     * @return string
     */
    public function getGenderNameAttribute(): string
    {
        return match ($this->gender) {
            1 => 'Gars',
            2 => 'Fille',
            default => 'Mystère',
        };
    }

    /**
     * @return string
     */
    public function getGenderImageAttribute(): string
    {
        switch ($this->gender)
        {
            case 1:
                return '/images/account/boy.png';
                break;
            case 2:
                return 'images/account/female.png';
                break;
            default:
                return '/images/account/mystery.png';
                break;
        }
    }

    public function getUserConnections()
    {
        $userLogins = Login::where('user_id', $this->id)->get();
        $userIPs = $userLogins->pluck('ip_address')->unique()->toArray();

        $otherUserLogins = Login::where('user_id', '!=', $this->id)
            ->whereIn('ip_address', $userIPs)
            ->groupBy('user_id')
            ->get();

        return $otherUserLogins;
    }

    /**
     * @return mixed
     */
    function getIP(): mixed
    {
        if(!empty($_SERVER["CF-Connecting-IP"]))
            $ip = $_SERVER["CF-Connecting-IP"];
        else if(!empty($_SERVER["HTTP_CF_CONNECTING_IP"]))
            $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
        else if (!empty($_SERVER['HTTP_CLIENT_IP']))
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        elseif(!empty( $_SERVER['HTTP_X_FORWARDED_FOR']))
            $ip =$_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip = $_SERVER['REMOTE_ADDR'];
        return $ip;
    }

    /**
     * @param null $array
     */
    public function createPlayer($array = null): void
    {
        $this->player()->create([
            'pseudo'            => $array['pseudo'] ?? $this->username,
            'session'           => $array['session'] ?? Str::random(10),
            'experience'        => $array['experience'] ?? 0,
            'experience_daily'  => $array['experience_daily'] ?? 0,
            'blabillon'         => $array['blabillon'] ?? 50000,
            'positionX'         => $array['positionX'] ?? 71534,
            'positionY'         => $array['positionY'] ?? 29125,
            'online'            => 0,
            'skin_id'           => $array['skin_id'] ?? 7,
            'map_id'            => $array['map_id'] ?? 9,
            'server_id'         => $array['server_id'] ?? 0,
        ]);

      foreach (Skin::whereSpecial(SkinSpecial::V1)->get() as $skin) {
          $this->player->skins()->attach($skin, [
              'color' => $skin->color
          ]);
      }

        $powers = [
            4 => 10,  // Lingette
            3 => 5,   // Téléporteur
            14 => 5,  // Potion de rapidité
            5 => 3,   // Bombe
            89 => 10, // Banane
            11 => 60, // Jetpack
            93 => 5, // Trampoline
            34 => 20, // Confettis
            110 => 20, // Confettis
            46 => 1, // MONTURE : Cheval
            38 => 1, // BLIBLI : La Soucoupe Volante
        ];
        foreach ($powers as $item => $quantity) {
            $this->player->powers()->attach($item, [
                'quantity' => $quantity
            ]);
        }
    }
}
