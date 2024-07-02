<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('awards')->insert(
            [
                [
                    'name_award' => 'Meilleur groupe de rock 1970',
                ],
                [
                    'name_award' => 'Meilleur groupe de rock 1980',
                ],
                [
                    'name_award' => 'Meilleur groupe de rock 1990',
                ],
            ]

        );
    }
}
