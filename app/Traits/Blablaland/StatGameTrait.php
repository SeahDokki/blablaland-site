<?php

namespace App\Traits\Blablaland;


trait StatGameTrait
{
    function successRate(): string
    {
        $successRate = ($this->won / ($this->won + $this->lost)) * 100;
        return number_format($successRate);
    }
}
