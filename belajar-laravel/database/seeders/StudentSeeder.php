<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
require_once 'vendor/autoload.php';

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //masukin data
        $faker = \Faker\Factory::create();
        for ($i = 5; $i < 51; $i++) { //alasan kenapa dari index 5 karena sebelumnya saya sudah memasukkan 4 data,
        $data = [                      //jadi tinggal nerusin data ke berikutnya
            ['id' => $i, 'name'=> $faker->name(), 'score' => $faker->numberBetween(50, 100)],
            ];
            DB::table('student')->insert($data);
        }
    }
}