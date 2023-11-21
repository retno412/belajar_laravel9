<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 1, 'name' => 'Dwika', 'score' => 80],
            ['id' => 2, 'name' => 'wika', 'score' => 85],
            ['id' => 3, 'name' => 'jaya', 'score' => 90],
            ['id' => 4, 'name' => 'fitroh', 'score' => 95],
            ['id' => 5, 'name' => 'yati', 'score' => 90],
            ['id' => 6, 'name' => 'fany', 'score' => 80],
            ['id' => 7, 'name' => 'lailatu', 'score' => 90],
            ['id' => 8, 'name' => 'cipa', 'score' => 95],
            ['id' => 9, 'name' => 'syifa', 'score' => 70],
            ['id' => 10, 'name' => 'yunida', 'score' => 80],
            ['id' => 11, 'name' => 'nadya', 'score' => 90],
            ['id' => 12, 'name' => 'nada', 'score' => 85],
            ['id' => 13, 'name' => 'pradista', 'score' => 80],
            ['id' => 14, 'name' => 'octavia', 'score' => 85],
            ['id' => 15, 'name' => 'arif', 'score' => 80],
            ['id' => 16, 'name' => 'tri', 'score' => 87],
            ['id' => 17, 'name' => 'ariansyah', 'score' => 80],
            ['id' => 18, 'name' => 'muhamad', 'score' => 85],
            ['id' => 19, 'name' => 'maylinda', 'score' => 80],
            ['id' => 20, 'name' => 'indri', 'score' => 90],
            ['id' => 21, 'name' => 'puspita', 'score' => 95],
            ['id' => 22, 'name' => 'dewi', 'score' => 87],
            ['id' => 23, 'name' => 'dwi', 'score' => 91],
            ['id' => 24, 'name' => 'fitri', 'score' => 85],
            ['id' => 25, 'name' => 'eka', 'score' => 70],
            ['id' => 26, 'name' => 'nurul', 'score' => 77],
            ['id' => 27, 'name' => 'rafa', 'score' => 87],
            ['id' => 28, 'name' => 'pratama', 'score' => 75],
            ['id' => 29, 'name' => 'rara', 'score' => 76],
            ['id' => 30, 'name' => 'rania', 'score' => 82],
            ['id' => 31, 'name' => 'hameeda', 'score' => 90],
            ['id' => 32, 'name' => 'nopi', 'score' => 83],
            ['id' => 33, 'name' => 'cindy', 'score' => 86],
            ['id' => 34, 'name' => 'yayah', 'score' => 70],
            ['id' => 35, 'name' => 'nur', 'score' => 88],
            ['id' => 36, 'name' => 'nuri', 'score' => 87],
            ['id' => 37, 'name' => 'ari', 'score' => 98],
            ['id' => 38, 'name' => 'rafi', 'score' => 85],
            ['id' => 39, 'name' => 'linda', 'score' => 90],
            ['id' => 40, 'name' => 'andri', 'score' => 91],
            ['id' => 41, 'name' => 'dinda', 'score' => 95],
            ['id' => 42, 'name' => 'lia', 'score' => 81],
            ['id' => 43, 'name' => 'feni', 'score' => 87],
            ['id' => 44, 'name' => 'meli', 'score' => 70],
            ['id' => 45, 'name' => 'yani', 'score' => 78],
            ['id' => 46, 'name' => 'eri', 'score' => 98],
            ['id' => 47, 'name' => 'ira', 'score' => 90],
            ['id' => 48, 'name' => 'fira', 'score' => 85],
            ['id' => 49, 'name' => 'inda', 'score' => 90],
            ['id' => 50, 'name' => 'rifa', 'score' => 91],
        ];
        DB::table('student')->insert($data);
    }
}
