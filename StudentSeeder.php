<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = FakerFactory::create();
        $data = [];

        for ($i = 0; $i < 64; $i++) {
            $data[] = [
                'name' => $faker->name,
                'score' => $faker ->numberBetween(70, 100),
            ];
        }

        DB::table('student')->insert($data);
    }
}
