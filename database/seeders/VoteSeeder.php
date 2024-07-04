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
                    'vote_award' => '1',
                    'id_award'=>'1',
                    'id_rockband'=>'1',
                    'id_user'=>'1',
                ],
                [
                    'vote_award' => '2',
                    'id_award'=>'2',
                    'id_rockband'=>'2',
                    'id_user'=>'2',
                ],
                [
                    'vote_award' => '4',
                    'id_award'=>'4',
                    'id_rockband'=>'4',
                    'id_user'=>'4',
                ],
            ]

        );
    }
}
