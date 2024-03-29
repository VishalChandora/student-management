<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insertOrIgnore([[
            'name' => 'FYBSCIT',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'SYBSCIT',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'TYBSCIT',
            'created_at' => now(),
            'updated_at' => now()
        ]]);
    }
}
