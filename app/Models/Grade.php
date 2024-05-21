<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Grade extends Model
{
    use HasFactory;

    /**
     * @return Collection
     */
    public function rights(): Collection
    {
        $rights = collect([]);
        foreach (Right::all() as $right) {
            if ($right->grade_id <= $this->id) {
                $rights->push($right);
            }
        }
        return $rights;
    }
}
