<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\BlackList;

class BlackListController extends Controller
{
    public function getAllBlackLists()
    {
        return BlackList::all();
    }

    public function addBlackListedUser(Request $request)
    {
        $apiUrl = env('ELEVEN_API', '')."/accounts/".$request->input('uname');
        $response = Http::get($apiUrl);
        if($response->ok())
        {
            $data = $response->json();
            $thisBlackList = BlackList::find($data['data']['id']);
            if($thisBlackList)
            {
                $thisBlackList->user_name = $data['data']['attributes']['user-name'];
                $thisBlackList->reasons = $request->input('reason');
                $thisBlackList->save();
            }
            else
            {
                BlackList::create([
                    'user_id' => $data['data']['id'],
                    'user_name' => $data['data']['attributes']['user-name'],
                    'reasons' => $request->input('reason')
                ]);
            }
        }
        else
        {
            abort(404);
        }
        return BlackList::find($data['data']['id']);
    }
}
