<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RockbandAwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rockband_award')->insert(
            [
                [
                    'award_id'=>'1',
                    'rockband_id'=>'1',
                ],
                [
                    'award_id'=>'1',
                    'rockband_id'=>'2',
                ],
                [
                    'award_id'=>'1',
                    'rockband_id'=>'3',
                ],
                [
                    'award_id'=>'2',
                    'rockband_id'=>'2',
                ],
                [
                    'award_id'=>'2',
                    'rockband_id'=>'3',
                ],
                [
                    'award_id'=>'2',
                    'rockband_id'=>'4',
                ],
                [
                    'award_id'=>'4',
                    'rockband_id'=>'4',
                ],
                [
                    'award_id'=>'4',
                    'rockband_id'=>'1',
                ],
                [
                    'award_id'=>'4',
                    'rockband_id'=>'2',
                ],
                
            ]

        );
    }
}
