<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use App\Models\User;

class GetRank extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elevenkr:rank';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build Rank data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $apiUrl = env('ELEVEN_API', '')."/accounts/";
        $elevenkrUsers = [];
        $users = User::all();
        foreach($users as $thisUser)
        {

            $response = Http::get($apiUrl.$thisUser['user_id'])->json();
            if($response['data'])
            {
                $user = $response['data'];
                $refinedUser = [
                    'rank' => -1,
                    'user_id' => $user['id'],
                    'user_name' => $user['attributes']['user-name'],
                    'elo' => $user['attributes']['elo'],
                    'world_rank' => $user['attributes']['rank'] > 0 ? $user['attributes']['rank'] : INF,
                    'wins' => $user['attributes']['wins'],
                    'loses' => $user['attributes']['losses']
                ];
                array_push($elevenkrUsers, $refinedUser);
            }
            
        }

        $elevenkrUsers = collect($elevenkrUsers)->sortBy('world_rank')->toArray();
        $orderedUsers = [];
        $rankCount = 1;
        foreach($elevenkrUsers as $thisUser)
        {
            $thisUser['rank'] = $rankCount;
            $rankCount++;
            if($thisUser['world_rank'] == INF)
            {
                $thisUser['world_rank'] = -1;
            }
            array_push($orderedUsers, $thisUser);
        }
        Redis::set('ranks',json_encode($orderedUsers));
    }
}
