<?php

namespace App\Enums;

enum PowerType: string
{
    case OneTime = 'ONE_TIME';
    case Quantity = 'QUANTITY';
    case Time = 'TIME';
    case Pack = 'PACK';
}
