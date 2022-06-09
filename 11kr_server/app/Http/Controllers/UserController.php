<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\User;

class UserController extends Controller
{
    public function getAllOnlineUsers()
    {
        $users = Redis::get('users');
        return $users;
    }

    public function addUser(Request $request)
    {
        $apiUrl = env('ELEVEN_API', '')."/accounts/".$request->input('uname');
        $response = Http::get($apiUrl);
        if($response->ok())
        {
            $data = $response->json();
            $thisUser = User::find($data['data']['id']);
            if(!$thisUser)
            {
                User::create([
                    'user_id' => $data['data']['id']
                ]);
            }
        }
        else
        {
            abort(404);
        }
        return User::find($data['data']['id']);
    }
}
