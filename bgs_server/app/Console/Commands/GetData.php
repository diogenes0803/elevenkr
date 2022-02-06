<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redis;


class GetData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bgs:pull';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull live user data from the Eleven Table Tennis Server';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    private function bgsCheck($userName)
    {
        if(Str::contains(Str::upper($userName), "[BGS]"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $success = false;

        while(!$success)
        {
            $response = Http::get(env('ELEVEN_LIVE_DATA_URL', ''));
            $elevenInfo = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $response->body()), true );
            $bgsOnlineUsers = [];
            $bgsMatches = [];
            if($elevenInfo)
            {
                $success = true;
                foreach($elevenInfo['OnlineUses'] as $thisUser) 
                {
                    if($this->bgsCheck($thisUser['UserName']))
                    {
                        $refined = [
                            'user_name' => $thisUser['UserName'],
                            'user_id' => $thisUser['Id'],
                            'device' => $thisUser['Device'],
                            'elo' => $thisUser['ELO']
                        ];
                        array_push($bgsOnlineUsers, $refined);
                    }
                }

                foreach($elevenInfo['ActiveMatches'] as $thisMatch)
                {
                    $homePlayer = $thisMatch['HomePlayer'];
                    $awayPlayer = $thisMatch['AwayPlayer'];
                    if($this->bgsCheck($homePlayer['UserName']) || $this->bgsCheck($awayPlayer['UserName']))
                    {
                        $refined = [
                            'user_name' => $homePlayer['UserName'],
                            'opponent_name' => $awayPlayer['UserName'],
                            'type' => $thisMatch['Ranked'] ? '수위전' : '친선전',
                            'round1' => '-',
                            'round2' => '-',
                            'round3' => '-',
                            'home_elo' => $homePlayer['ELO'],
                            'away_elo' => $awayPlayer['ELO']
                        ];
                        foreach($thisMatch['Rounds'] as $index => $round)
                        {
                            $refined['round'.strval($index+1)] = $round['HomeScore']." : ".$round['AwayScore'];
                        }
                        array_push($bgsMatches, $refined);
                    }
                }
                Redis::set('users',json_encode($bgsOnlineUsers));
                Redis::set('matches', json_encode($bgsMatches));
            }
        }
    }
}
