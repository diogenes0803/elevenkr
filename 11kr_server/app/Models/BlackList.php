<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlackList extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'user_id';

    public function ElevenKrMatches()
    {
        return $this->hasMany('App\Models\ElevenKrMatch');
    }
}
