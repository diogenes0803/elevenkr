<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchRound extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function BGSMatch()
    {
        return $this->belongsTo('App\Models\BGSMatch');
    }
}
