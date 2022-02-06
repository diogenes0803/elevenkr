<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MatchController extends Controller
{
    public function getAllCurentMatches()
    {
        $matches = Redis::get('matches');
        return $matches;
    }
}
