<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms')->insertOrIgnore([[
            'name' => '2021-2022',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => '2022-2023',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => '2023-2024',
            'created_at' => now(),
            'updated_at' => now()
        ]]);

    }
}
