<?php

namespace App\Traits;


trait TagTrait
{
    /**
     * @return string
     */
    public function getNameSpanAttribute(): string
    {
        $count = $this->users->count();
        $value = htmlspecialchars($this->name);
        $weight = 'normal';
        $size = '12px';

        if ($count > 5) {
            $size = '14px';
        } elseif ($count > 20) {
            $size = '18px';
            $weight = 'bold';
        } elseif ($count > 30) {
            $size = '20px';
            $weight = 'bold';
        }
        return "<span title='$count membre(s)' style='color:$this->color;font-size:$size;font-weight:$weight'>$this->name</span>";
    }
}
