<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function getAllOnlineUsers()
    {
        $users = Redis::get('users');
        return $users;
    }
}
