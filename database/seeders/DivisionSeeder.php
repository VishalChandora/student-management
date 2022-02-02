<?php

namespace Database\Seeders;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insertOrIgnore([[
            'name' => 'A',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'B',
            'created_at' => now(),
            'updated_at' => now()
        ]]);


    }
}
