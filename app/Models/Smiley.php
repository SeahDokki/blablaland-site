<?php

namespace App\Models;

use App\Traits\SmileyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smiley extends Model
{
    use HasFactory, SmileyTrait;
}
