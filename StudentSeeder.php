<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker ;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data = [
        //     ['id' => 1, 'name' => 'Retno', 'score' => 80],
        //     ['id' => 2, 'name' => 'Ariyanti', 'score' => 85],
        //     ['id' => 3, 'name' => 'Nurningtias', 'score' => 90],
        // ];
        $faker = Faker::create();
        //
        $data = [];
            for ($i = 3; $i <50; $i++) {
                $data[] = [
                    'id' => $i + 1,
                    'name' => $faker->name(),
                    'score' => $faker->numberBetween(50, 100),
                ];
            }
        DB::table('student')->insert($data);
    }

}
