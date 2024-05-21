<?php

namespace App\Traits\Admin;


trait ArtworkTrait
{
    /**
     * @return mixed
     */
    public function getPictureUrlAttribute(): mixed
    {
        return \Storage::url($this->picture);
    }

    /**
     * @return mixed
     */
    public function getPictureMinUrlAttribute(): mixed
    {
        return \Storage::url($this->picture_min);
    }
}
