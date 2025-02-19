<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Court;

class CourtType extends Model
{
    public function court()
    {
        return $this->hasMany(Court::class);
    } 
}
