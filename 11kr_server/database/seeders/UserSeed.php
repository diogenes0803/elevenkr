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
            [ 'user_id' => 1164477 ],
            [ 'user_id' => 153738 ],
            [ 'user_id' => 552997 ],
            [ 'user_id' => 1029563 ],
            [ 'user_id' => 145268 ],
            [ 'user_id' => 426365 ],
            [ 'user_id' => 476893 ],
            [ 'user_id' => 467066 ],
            [ 'user_id' => 423933 ],
            [ 'user_id' => 498970 ],
            [ 'user_id' => 850519 ],
            [ 'user_id' => 508262 ],
            [ 'user_id' => 916969 ],
            [ 'user_id' => 1164864 ],
            [ 'user_id' => 120432 ],
            [ 'user_id' => 479431 ],
            [ 'user_id' => 717218 ],
            [ 'user_id' => 454057 ],
            [ 'user_id' => 345376 ],
            [ 'user_id' => 593938 ],
            [ 'user_id' => 663305 ],
            [ 'user_id' => 1075595 ],
            [ 'user_id' => 537170 ],
            [ 'user_id' => 459067 ],
            [ 'user_id' => 1242891 ],
            [ 'user_id' => 327949 ],
            [ 'user_id' => 395434 ],
            [ 'user_id' => 414604 ],
            [ 'user_id' => 486637 ],
            [ 'user_id' => 790050 ]
        ];
        foreach($data as $thisData)
        {
            DB::table('users')->insert($thisData);
        }
    }
}
