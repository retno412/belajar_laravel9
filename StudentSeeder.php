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
            ['id'=> 1, 'name'=> 'Azzahra', 'score'=> 85],
            ['id'=> 2, 'name'=> 'Salsabilla', 'score'=> 90],
        ];
        for ($i = 3; $i<= 50; $i++) {
            $data[] = [
                'id' => $i,
                'name' => $faker->name,
                'score' => $faker ->numberBetween(50, 100)
            ];
        }

        DB::table('student')->insert($data);
    }
}