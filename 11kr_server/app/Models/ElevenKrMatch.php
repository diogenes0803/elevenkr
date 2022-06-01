<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElevenKrMatch extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table="elevenkr_matches";

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function MatchRounds()
    {
        return $this->hasMany('App\Models\MatchRound');
    }
}
