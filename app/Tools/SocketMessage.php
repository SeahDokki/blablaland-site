<?php

namespace App\Tools;
use App\Models\Power;
use App\Models\Smiley;
use App\Models\User;

class SocketMessage
{
    public Binary $binary;

    /**
     * @param $type
     * @param $subType
     */
    public function __construct($type, $subType)
    {
        $this->binary = new Binary();
        $this->binary->bitWriteUnsignedInt(5, $type);
        $this->binary->bitWriteUnsignedInt(5, $subType);
    }

    /**
     * Send the information of an update of the object
     * @param User $user
     * @param Power $power
     * @return void
     */
    public function reloadObject(User $user,Power $power, $sendBBL): void
    {
        $this->binary->bitWriteUnsignedInt(24, $user->id);
        $this->binary->bitWriteUnsignedInt(32, $power->pivot->id);
        $this->binary->bitWriteUnsignedInt(32, $power->pivot->power_id);
        $this->binary->bitWriteUnsignedInt(32, $power->pivot->quantity);
        $this->binary->bitWriteBoolean($sendBBL);
        $this->send($this->binary->exportMessage());
    }

    /**
     * Pack Smiley
     * @param User $user
     * @param Smiley $smiley
     * @return void
     */
    public function reloadPackSmiley(User $user, Smiley $smiley, $sendBBL): void
    {
        $this->binary->bitWriteUnsignedInt(24, $user->id);
        $this->binary->bitWriteUnsignedInt(5, $smiley->id);
        $this->binary->bitWriteBoolean($sendBBL);
        $this->send($this->binary->exportMessage());
    }

    /**
     * @param User $sender
     * @param User $receiver
     */
    public function sendAffinity(User $sender, User $receiver, $type): void
    {
        $this->binary->bitWriteUnsignedInt(24, $sender->id);
        $this->binary->bitWriteUnsignedInt(24, $receiver->id);
        $this->binary->bitWriteUnsignedInt(3, $type);

        switch ($type) {
            case 1: // Friend Request
                $this->binary->bitWriteString($sender->player->pseudo);
                break;
            case 2: // Accept Friend
                $this->binary->bitWriteString($sender->player->pseudo);
                $this->binary->bitWriteString($receiver->player->pseudo);
                break;
            case 3: // Remove Friend
                $this->binary->bitWriteString($sender->player->pseudo);
                $this->binary->bitWriteString($receiver->player->pseudo);
                break;
            case 4: // Add Blacklist
                $this->binary->bitWriteString($sender->player->pseudo);
                break;
            default:
                break;
        }
        $this->send($this->binary->exportMessage());
    }

    /**
     * @param User $user
     * @param string $message
     * @return void
     */
    public function kick(User $user, string $message): void
    {
        $this->binary->bitWriteUnsignedInt(24, $user->id);
        $this->binary->bitWriteString($message);
        $this->send($this->binary->exportMessage());
    }

    /**
     * @param User $user
     * @param $colors
     * @return void
     */
    public function setSkin(User $user, $skinId, $colors): void
    {
        $this->binary->bitWriteUnsignedInt(24, $user->id);
        $this->binary->bitWriteUnsignedInt(10, $skinId);
        foreach ($colors as $color) {
            $this->binary->bitWriteUnsignedInt(8, $color);
        }
        $this->send($this->binary->exportMessage());
    }

    /**
     * @param User $user
     * @param $colors
     * @return void
     */
    public function allowIP($ipAddress): void
    {
        $this->binary->bitWriteString($ipAddress);
        $this->send($this->binary->exportMessage());
    }

    /**
     * Send to server
     * @param $data
     * @return void
     */
    public function send($data): void
    {
        $conn = @socket_create(AF_INET, SOCK_STREAM, 0);
        if (@socket_connect($conn, env('IP_SERVER'), 12301)) {
            @socket_write($conn, $data);
            @socket_close($conn);
        }
    }
}
