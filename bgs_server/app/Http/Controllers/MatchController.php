<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function getAllCurentMatches()
    {
        $users = Users::where('is_online', 1)->get();
        return $users;
    }
}
