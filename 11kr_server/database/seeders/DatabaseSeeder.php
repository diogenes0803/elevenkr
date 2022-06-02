<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BlackListSeed;
use Database\Seeders\UserSeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BlackListSeed::class,
            UserSeed::class,
        ]);
    }
}
