<?php

namespace App\Http\Controllers;

use App\Models\DiscordUser;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

/**
 * Class DiscordController
 * @package App\Http\Controllers
 */
class DiscordController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if ($user && $user->discord) {
            abort(404);
        }

        $query = http_build_query([
            'client_id'     => env('DISCORD_CLIENT_ID'),
            'redirect_uri'  => url(env('DISCORD_REDIRECT_URI')),
            'response_type' => 'code',
            'scope'         => 'identify email',
        ]);

        return redirect("https://discord.com/api/oauth2/authorize?{$query}");
    }

    public function callback(Request $request)
    {
        $http   = new Client();
        $user   = Auth::user();
        $type   = 'success';
        $state  = null;

        try {
            $response = $http->post('https://discord.com/api/oauth2/token', [
                'form_params'       => [
                    'client_id'     => env('DISCORD_CLIENT_ID'),
                    'client_secret' => env('DISCORD_CLIENT_SECRET'),
                    'grant_type'    => 'authorization_code',
                    'code'          => $request->input('code'),
                    'redirect_uri'  => url(env('DISCORD_REDIRECT_URI')),
                ],
            ]);

            $tokens         = json_decode((string)$response->getBody(), true);
            $accessToken    = $tokens['access_token'];
            $response       = $http->get('https://discord.com/api/users/@me', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
            ]);

            $discordUser = json_decode((string)$response->getBody(), true);
            $discordUserRecord = DiscordUser::where('discord_id', $discordUser['id'])->first();
            $attributes = [
                'discord_id'    => $discordUser['id'],
                'username'      => $discordUser['username'],
                'discriminator' => $discordUser['discriminator'],
                'email'         => $discordUser['email'] ?? null,
                'avatar'        => $discordUser['avatar'],
            ];

            if (!$discordUserRecord) {
                // If the user is logged in, try to find an existing record
                if ($user) {
                    $existingUserRecord = DiscordUser::where('user_id', $user['id'])->first();

                    // If an existing record is found, update it; otherwise, create a new one
                    if ($existingUserRecord) {
                        $discordUserRecord = $existingUserRecord->update($attributes);
                    } else {
                        $attributes['user_id']  = $user['id']; // Add user_id only if absent
                        $discordUserRecord      = DiscordUser::create($attributes);
                    }
                    $state = 'Ton compte Discord est maintenant lié !';
                } else {
                    // If the user is not logged in, create a new Discord user record
                    $discordUserRecord = DiscordUser::create($attributes);
                    $state = 'REGISTER_DISCORD_CREATE';
                }
            } else {
                // Update the existing Discord user record
                $discordUserRecord->update($attributes);
                $state = $user ? 'Nous avons mis à jour les informations de ton compte Discord !' : 'REGISTER_DISCORD_UPDATE';
            }

            if ($user) {
                return redirect()->route('account.discord.index')->with([
                    'type'      => $type,
                    'status'    => $state
                ]);
            } else {
                return redirect()->route('register')->with([
                    'state' => $state
                ]);
            }

        } catch (\Exception $e) {
            abort(500);
        }
    }
}
