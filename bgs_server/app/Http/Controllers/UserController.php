<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function getAllOnlineUsers()
    {
        $users = Users::where('is_online', 1)->get();
        return $users;
    }
}
