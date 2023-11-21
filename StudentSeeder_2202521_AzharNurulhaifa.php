<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $data = [
            ['id' => 1, 'name' => 'Azhar', 'score' => 80],
            ['id'=> 2, 'name'=> 'Nurul', 'score'=> 85],
            ['id'=> 3, 'name'=> 'Haifa', 'score'=> 90],
        ];

        for ($i = 4; $i<= 75; $i++) {
            $data[] = [
                'id' => $i,
                'name' => $faker->name,
                'score' => $faker ->numberBetween(75, 100)
            ];
        }

        DB::table('student')->insert($data);
    }
}
