<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Technical', 'code' => 'C'],
            ['name' => 'Humanity', 'code' => 'PN'],
            ['name' => 'General Studies', 'code' => 'N'],
            ['name' => 'Hospitality', 'code' => 'P'],
            ['name' => 'Artisan', 'code' => 'J'],
            ['name' => 'Beauty Therapy', 'code' => 'S'],
        ];

        DB::table('class_types')->insert($data);

    }
}
