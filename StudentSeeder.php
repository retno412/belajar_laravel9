<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
require_once 'vendor/autoload.php';

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ketik masing-masing
        // $data = [
        //     ['id' => 1, 'name' => 'Herfian Muhammad', 'score' => 80 ],
        //     ['id' => 2, 'name' => 'Triana Dewinta Sari', 'score' => 90 ],
        //     ['id' => 3, 'name' => 'Triani Hartika Suri', 'score' => 90 ],
        // ];
        // DB::table('student')->insert($data);
        $faker = Faker::create();

        for($i = 4; $i <= 50; $i++) {
            DB::table('student')->insert([
                'id' => $i,
                'name' => $faker->name,
                'score' => $faker->numberBetween(0,100),
            ]);
        }
    }
}
