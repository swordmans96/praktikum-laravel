<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CourtType;

class Court extends Model
{
    public function type()
    {
        return $this->belongsTo(CourtType::class, 'court_type_id');
    }

}
