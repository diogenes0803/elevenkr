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
            ],
            [
                'user_id' => 959768,
                'user_name' => 'DRO4real',
                'reasons' => '외국인으로 추정, 마이크 끄고 제스쳐로 조롱함'
            ],
            [
                'user_id' => 461087,
                'user_name' => 'waltz',
                'reasons' => '게임 끝나고 비아냥'
            ],
            [
                'user_id' => 842900,
                'user_name' => 'seb2942',
                'reasons' => '테이블 넘어와서 라켓으로 사람 머리 때리는 모션, 삿대질'
            ],
            [
                'user_id' => 795339,
                'user_name' => 'plumblow',
                'reasons' => '랭킹전 본인/상대 서브 시간을 의도적으로 지연시킴. 시간 거의 끝날 때까지 기다렸다가 공 바닥에 떨구고 계속 대기'
            ],
            [
                'user_id' => 182733,
                'user_name' => 'PARK',
                'reasons' => '항공모함'
            ],
            [
                'user_id' => 1198861,
                'user_name' => 'Never',
                'reasons' => '욕설'
            ],
            [
                'user_id' => 59724,
                'user_name' => 'Trippiereddgun',
                'reasons' => '욕설, 음담패설, 인종차별, 공던지기, 서브 지연, 앙탈, 고의적 신고. 종합 선물셋트 미친놈.'
            ],
            [
                'user_id' => 118893,
                'user_name' => 'HandballPlayer',
                'reasons' => '순위전시 준비 안누르고, 상대편 탁구대 뒤에 서 있다가, 자기자리라고 우김. 경기 시작하면, 서브 한번 넣고 성공 하면 우쭐대면서 상대편 놀림 (사브 지연 20-30초)'
            ]
        ];
        foreach($data as $thisData)
        {
            DB::table('black_lists')->insert($thisData);
        }
    }
}
