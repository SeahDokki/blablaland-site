<?php

namespace App\Enums;

enum LoginType: string
{
    case GAME = 'GAME';
    case CONSOLE = 'CONSOLE';
    case WEBSITE = 'WEBSITE';
}
