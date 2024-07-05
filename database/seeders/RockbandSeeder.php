<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RockbandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rockbands')->insert(
            [
                [
                    'name_rockband' => 'Led Zeppelin',
                    'user_id'=>'3',
                ],
                [
                    'name_rockband' => 'The beatles',
                    'user_id'=>'3',
                ],
                [
                    'name_rockband' => 'The Who',
                    'user_id'=>'3',
                ],
                [
                    'name_rockband' => 'Black Sabbath',
                    'user_id'=>'3',
                ],
            ]

        );
    }
}
