<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlackListSeed extends Seeder
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
                'user_id' => 173259,
                'user_name' => 'spri35',
                'reasons' => '인종차별, 혐오 발언 등',
            ],
            [
                'user_id' => 522830,
                'user_name' => '[BGS]chobo',
                'reasons' => '심한욕설',
            ],
            [
                'user_id' => 589506,
                'user_name' => 'eokho',
                'reasons' => '팔로 뻑큐 날림',
            ],
            [
                'user_id' => 466941,
                'user_name' => 'higg',
                'reasons' => '순위전 안받으면 욕하고 나감',
            ],
            [
                'user_id' => 576813,
                'user_name' => 'sooooon',
                'reasons' => '욕설',
            ],
            [
                'user_id' => 621069,
                'user_name' => 'kjklkjk',
                'reasons' => '순위전중 서브를 전혀 받지를 못하시네? 시전 후 시간끌기',
            ],
            [
                'user_id' => 755558,
                'user_name' => 'bboggle',
                'reasons' => '욕설',
            ],
            [
                'user_id' => 714693,
                'user_name' => 'opqrff',
                'reasons' => '순위전 시 상대방 자리에서 공 막는 식으로 경기 진행 방해함. 한국사람',
            ],
            [
                'user_id' => 799224,
                'user_name' => 'EMINEM',
                'reasons' => '고의적 서브지연',
            ],
            [
                'user_id' => 646146,
                'user_name' => 'jojikill',
                'reasons' => '랭킹전에서 욕설 및 비아냥',
            ]
        ];
        foreach($data as $thisData)
        {
            DB::table('black_lists')->insert($thisData);
        }
    }
}
