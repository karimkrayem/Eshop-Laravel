<?php

namespace App\Models;

use App\Models\TeamRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;


    public function role()
    {
        return $this->belongsTo(TeamRole::class);
    }
}
