<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RankController extends Controller
{
    public function getRank()
    {
        $ranks = Redis::get('ranks');
        return $ranks;
    }
}
