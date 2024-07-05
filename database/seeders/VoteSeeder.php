<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('votes')->insert(
            [
                [
                    'award_id'=>'1',
                    'rockband_id_'=>'1',
                    'user_id'=>'1',
                ],
                [
                    'award_id'=>'2',
                    'rockband_id_'=>'2',
                    'user_id'=>'2',
                ],
                [
                    'award_id'=>'4',
                    'rockband_id_'=>'4',
                    'user_id'=>'4',
                ],
            ]

        );
    }
}
