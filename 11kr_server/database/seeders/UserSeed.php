<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 552997
            ],
            [
                'user_id' => 1029563
            ],
            [
                'user_id' => 498970
            ],
            [
                'user_id' => 850519
            ],
            [
                'user_id' => 663305
            ],
            [
                'user_id' => 459067
            ],
            [
                'user_id' => 1075595
            ],
            [
                'user_id' => 476893
            ],
            [
                'user_id' => 467066
            ],
            [
                'user_id' => 1164864
            ],
            [
                'user_id' => 454057
            ],
            [
                'user_id' => 717218
            ],
            [
                'user_id' => 1242891
            ],
            [
                'user_id' => 537170
            ],
            [
                'user_id' => 508262
            ],
            [
                'user_id' => 426365
            ],
            [
                'user_id' => 339018
            ],
            [
                'user_id' => 153738
            ],
            [
                'user_id' => 479431
            ],
            [
                'user_id' => 120432
            ]
        ];
        foreach($data as $thisData)
        {
            DB::table('users')->insert($thisData);
        }
    }
}
