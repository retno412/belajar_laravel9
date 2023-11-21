<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; // Tambahkan impor Faker

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //$data = [
            //['id'=> 1, 'name'=> 'annisa', 'score' => 100],
            //['id'=> 2, 'name'=> 'nur', 'score' => 90],
            //['id'=> 3, 'name'=> 'kholifah', 'score' => 95],
        //];
        
        $data = [];
        $faker = Faker::create();

        for ($i = 3; $i < 50; $i++) {
            $data[] = [
                'id' => $i + 1,
                'name'  => $faker->name,
                'score' => rand(30, 100),
            ];
        }

        DB::table('student')->insert($data);
    }
}

