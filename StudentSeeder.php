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
        //ketik masing-masing
        $data = [
            ['id' => 1, 'name' => 'Retno', 'score' => 80],
            ['id' => 2, 'name' => 'Amira', 'score' => 100],
            ['id' => 3, 'name' => 'Ariyanti', 'score' => 85],
        ];

        for ($i = 4 ; $i <= 55; $i++)
        {
            $data[] = [
                'id' => $i,
                'name' => $faker->name,
                'score' => $faker->numberBetween(50, 100),
            ];
        }
        DB::table('student')->insert($data);
    }
}
