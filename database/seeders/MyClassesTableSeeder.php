<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'Engineering', 'class_type_id' => $ct[2]],
            ['name' => 'Building Technology', 'class_type_id' => $ct[2]],
            ['name' => 'Beauty Therapy', 'class_type_id' => $ct[2]],
            ['name' => 'Information Technology', 'class_type_id' => $ct[3]],
            ['name' => 'Hospitality', 'class_type_id' => $ct[3]],
            ['name' => 'Plumbing', 'class_type_id' => $ct[4]],
            ['name' => 'Welding', 'class_type_id' => $ct[4]],
            ['name' => 'Human Resource', 'class_type_id' => $ct[5]],
            ['name' => 'ATD', 'class_type_id' => $ct[5]],
            ['name' => 'Business Management', 'class_type_id' => $ct[5]],
            ];

        DB::table('my_classes')->insert($data);

    }
}
