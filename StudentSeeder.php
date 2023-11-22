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
            ['id'=> 1, 'name'=> 'Arifal', 'score'=> 80],
            ['id'=> 2, 'name'=> 'Muhamad', 'score'=> 85],
            ['id'=> 3, 'name'=> 'Iqbal', 'score'=> 90],
            ['id'=> 4, 'name'=> 'Rahmat', 'score'=> 95],
        ];     
        for ($i = 5; $i<= 69; $i++) {
            $data[] = [
                'id' => $i,
                'name' => $faker->name,
                'score' => $faker ->numberBetween(69, 100)
            ];
        }
        DB::table('student')->insert($data);
    }
}
