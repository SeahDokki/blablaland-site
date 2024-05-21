<?php

namespace App\Traits;


trait SkinTrait
{
    public function getStrColorAttribute(): string
    {
        return $this->strToColor($this->color);
    }

    public function getStrColorPivotAttribute(): string
    {
        return $this->strToColor($this->pivot->color);
    }

    private function strToColor($color): string
    {
        $color = explode(";", $color);
        foreach($color as $i=>$v) { //Enlever le foreach
            $valeur = $v;
            $color[$i] = $valeur;
        }
        $color = array_map("chr", $color);
        return implode("", $color);
    }
}
