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
                    'id_user'=>'3',
                ],
                [
                    'name_rockband' => 'The beatles',
                    'id_user'=>'3',
                ],
                [
                    'name_rockband' => 'The Who',
                    'id_user'=>'3',
                ],
            ]

        );
    }
}
