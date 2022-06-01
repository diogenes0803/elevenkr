<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\BlackList;

class UpdateBlackList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elevenkr:blacklist_update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Blacklist Username';

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
        $blackLists = BlackList::all();
        foreach($blackLists as $blackList){
            $apiUrl = env('ELEVEN_API', '')."/accounts/".$blackList->user_id;
            $response = Http::get($apiUrl);
            if($response->ok())
            {
                $data = $response->json();
                $blackList->user_name = $data['data']['attributes']['user-name'];
                $blackList->save();
            }
        }
    }
}
